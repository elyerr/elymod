<?php
namespace Elyerr\Elymod;

use Illuminate\Routing\Router;
use Illuminate\Auth\RequestGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $vendorAutoload = __DIR__ . '/vendor/autoload.php';

        if (file_exists($vendorAutoload)) {
            require_once $vendorAutoload;
        }
         
        $this->registerMiddleware();
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'Elymod');
        $this->registerRoutes();
        $this->registerMigrations();
        $this->registerConfigs();
        $this->registerDeveloperGuards();
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/elymod.php', 'elymod');
    }

    /**
     * Register the routes for the Identity module.
     *
     * @return void
     */
    protected function registerRoutes()
    {
        $modulePath = __DIR__;
        $composerFile = dirname($modulePath) . '/composer.json';

        if (!file_exists($composerFile)) {
            throw new \Exception("composer.json not found");
        }

        $composer = json_decode(file_get_contents($composerFile), true);
        $packageName = $composer['name'] ?? basename(dirname($modulePath));

        $routeNamePrefix = 'modules.' . str_replace('/', '.', strtolower($packageName)); // ej. modules.elyerr.core-identity
        $slugIdentifier = $this->getModuleSlug();

        $isModuleStandalone = $this->app->basePath() === realpath($modulePath . '/..');

        // Developer mode
        if ($isModuleStandalone) {

            $this->loadMigrationsFrom(__DIR__ . '/../support/migrations');

            $this->loadViewsFrom(__DIR__ . '/../support/views', 'Core');

            if (file_exists($modulePath . '/../routes/web.php')) {
                Route::middleware('web')
                    ->group($modulePath . '/../support/web.php');
            }
        }
        // End developer mode

        // WEB routes
        if (file_exists($modulePath . '/../routes/web.php')) {
            Route::middleware('web')
                ->prefix('module/' . $slugIdentifier)
                ->name($routeNamePrefix . '.')
                ->group($modulePath . '/../routes/web.php');
        }

        // API routes
        if (file_exists($modulePath . '/../routes/api.php')) {
            Route::middleware('api')
                ->prefix('api/module/' . $slugIdentifier)
                ->name($routeNamePrefix . '.api.')
                ->group($modulePath . '/../routes/api.php');
        }
    }



    /**
     * Register middlewares
     * @return void
     */
    protected function registerMiddleware()
    {
        $router = $this->app->make(Router::class);

        $modulePath = __DIR__;
        $kernelFile = $modulePath . '/../routes/kernel.php';

        if (file_exists($kernelFile)) {
            $alias = require $kernelFile;

            foreach ($alias as $key => $value) {

                $router->aliasMiddleware($key, $value);
            }
        }

    }

    /**
     * Register the migrations for the Identity module.
     *
     * @return void
     */
    protected function registerMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '../database/Migrations');
    }

    /**
     * Register the configuration files for the Identity module.
     *
     * @return void
     */
    protected function registerConfigs()
    {
        $this->publishes([
            __DIR__ . '/config/elymod.php' => config_path('elymod.php'),
        ], 'elymod-config');
    }

    /**
     * Generate module key
     * @throws \Exception
     * @return string
     */
    protected function getModuleSlug(): string
    {
        $composerFile = __DIR__ . '/../composer.json';

        if (!file_exists($composerFile)) {
            throw new \Exception("composer.json not found");
        }

        $data = json_decode(file_get_contents($composerFile), true);

        if (!isset($data['name'])) {
            throw new \Exception("Module name missing");
        }

        // name: elyerr/core-identity → slug: core-identity
        $name = $data['name'];
        $slug = basename($name);
        $hash = substr(md5($name), 0, 8);
        return $slug . '-' . $hash;
    }

    /**
     * Register API guard in developer mode.
     */
    protected function registerDeveloperGuards(): void
    {
        $modulePath = __DIR__;
        $isModuleStandalone = $this->app->basePath() === realpath($modulePath . '/..');

        if (!$isModuleStandalone) {
            return;
        }
 
        // Define el guard 'simple-token'
        Auth::extend('simple-token', function ($app, $name, array $config) {
            return new RequestGuard(function ($request) {
                $token = $request->bearerToken();

                if (!$token) {
                    return null;
                }

                return \App\Models\User\User::where('api_token', $token)->first();
            }, request());
        });

        config([
            'auth.guards.api' => [
                'driver' => 'simple-token',
                'provider' => 'users',
            ],
            'auth.providers.users' => [
                'driver' => 'eloquent',
                'model' => \App\Models\User\User::class,
            ]
        ]);
    }
}
