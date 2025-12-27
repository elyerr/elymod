<?php

use Elyerr\LaravelRuntime\App\Application;
use Illuminate\Foundation\Configuration\Exceptions;

return Application::configure(basePath: dirname(__DIR__))
    ->withCommands([
        \{{ Namespace }}\App\Console\Commands\StorageLink::class,
    ])
    ->withExceptions(function (Exceptions $exceptions) {
    })->create();
