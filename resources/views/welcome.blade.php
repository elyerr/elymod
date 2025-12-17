<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elymod – Modular Mini Framework for Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(99, 102, 241, 0.2);
        }

        .gradient-border {
            position: relative;
            background: linear-gradient(15deg, #0f172a, #0f172a) padding-box,
                linear-gradient(135deg, #6366f1, #8b5cf6, #06b6d4) border-box;
            border: 2px solid transparent;
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(99, 102, 241, 0.4);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(99, 102, 241, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(99, 102, 241, 0);
            }
        }

        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .code-block {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
        }
    </style>
</head>

<body class="bg-slate-950 text-slate-100">

    <!-- Navigation -->
    <nav class="sticky top-0 z-50 glass-card border-b border-slate-800/50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div
                    class="w-8 h-8 rounded-lg bg-gradient-to-br from-indigo-600 to-purple-600 flex items-center justify-center">
                    <i class="fas fa-cube text-white"></i>
                </div>
                <span class="text-xl font-bold">Elymod</span>
            </div>
            <div class="hidden md:flex gap-8">
                <a href="#purpose" class="text-slate-300 hover:text-indigo-400 transition">{{ __('Purpose') }}</a>
                <a href="#architecture"
                    class="text-slate-300 hover:text-indigo-400 transition">{{ __('Architecture') }}</a>
                <a href="#features" class="text-slate-300 hover:text-indigo-400 transition">{{ __('Features') }}</a>
                <a href="#isolation"
                    class="text-slate-300 hover:text-indigo-400 transition">{{ __('Module Isolation') }}</a>
            </div>
            <a href="https://github.com/elyerr/elymod" target="_blank"
                class="rounded-lg bg-slate-800 hover:bg-slate-700 px-4 py-2 transition">
                <i class="fab fa-github mr-2"></i>GitHub
            </a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="relative overflow-hidden">
        <!-- Animated background -->
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900/30 via-purple-900/20 to-cyan-900/30"></div>
        <div class="absolute top-10 left-10 w-72 h-72 bg-purple-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-cyan-600/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-28">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 bg-slate-800/50 rounded-full px-4 py-2 mb-6">
                    <span class="w-2 h-2 rounded-full bg-green-500 pulse"></span>
                    <span class="text-sm">{{ __('Modular Framework v1.0') }}</span>
                </div>

                <h1 class="text-5xl md:text-7xl font-bold leading-tight">
                    {{ __('Build') }}
                    <span class="gradient-text">{{ __('Modular') }}</span>
                    <br>
                    {{ __('OAuth2 Modules') }}
                </h1>
                <p class="mt-6 text-xl text-slate-300 max-w-2xl">
                    {{ __('Elymod is a lightweight mini-framework designed specifically for building') }}
                    <span class="text-white font-semibold">{{ __('independent modules') }}</span>
                    {{ __('for OAuth2 Passport servers. Each module is self-contained with its own dependencies, licensing, and functionality.') }}
                </p>
                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="#architecture"
                        class="rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 px-8 py-4 font-semibold hover:from-indigo-500 hover:to-purple-500 transition hover-lift flex items-center gap-2">
                        <i class="fas fa-layer-group"></i> {{ __('Explore Architecture') }}
                    </a>
                    <a href="#isolation"
                        class="rounded-xl glass-card border border-slate-700 px-8 py-4 font-medium hover:bg-slate-800/50 transition hover-lift flex items-center gap-2">
                        <i class="fas fa-shield-alt"></i> {{ __('Module Isolation') }}
                    </a>
                </div>

                <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-indigo-400">{{ __('Independent') }}</div>
                        <div class="text-sm text-slate-400 mt-1">{{ __('Self-contained modules') }}</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-purple-400">{{ __('Laravel Bridge') }}</div>
                        <div class="text-sm text-slate-400 mt-1">{{ __('Familiar Artisan commands') }}</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-cyan-400">{{ __('Dependency Isolation') }}</div>
                        <div class="text-sm text-slate-400 mt-1">{{ __('No parent dependency conflicts') }}</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-400">{{ __('OAuth2 Ready') }}</div>
                        <div class="text-sm text-slate-400 mt-1">{{ __('Passport integration') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Purpose -->
    <section id="purpose" class="max-w-7xl mx-auto px-6 py-20">
        <div class="flex items-center gap-4 mb-12">
            <div
                class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-600 to-purple-600 flex items-center justify-center">
                <i class="fas fa-bullseye text-white"></i>
            </div>
            <h2 class="text-4xl font-bold">{{ __('Purpose: Modular OAuth2 Extension Framework') }}</h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <p class="mt-4 text-lg text-slate-300">
                    {{ __('Elymod is specifically designed to extend') }}
                    <span class="text-white font-semibold">{{ __('OAuth2 Passport Authorization Servers') }}</span>
                    {{ __('with pluggable modules. Each module is completely independent with its own:') }}
                </p>

                <div class="mt-8 space-y-4">
                    <div class="flex items-start gap-3">
                        <div
                            class="w-8 h-8 rounded-lg bg-indigo-900/30 flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-box text-indigo-400 text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">{{ __('Independent Dependencies') }}</h4>
                            <p class="text-slate-400 text-sm mt-1">
                                {{ __('Modules install dependencies in their own vendor directory, never relying on the parent application.') }}
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div
                            class="w-8 h-8 rounded-lg bg-purple-900/30 flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-balance-scale text-purple-400 text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">{{ __('Separate Licensing') }}</h4>
                            <p class="text-slate-400 text-sm mt-1">
                                {{ __('Each module can have its own license, allowing different teams to develop and distribute modules independently.') }}
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div
                            class="w-8 h-8 rounded-lg bg-cyan-900/30 flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-cogs text-cyan-400 text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">{{ __('Self-Contained Functionality') }}</h4>
                            <p class="text-slate-400 text-sm mt-1">
                                {{ __('Modules include all necessary code, configuration, and assets. No shared codebase conflicts.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-2xl gradient-border p-8 hover-lift">
                <h3 class="text-2xl font-semibold mb-6 text-center">{{ __('The Problem We Solve') }}</h3>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-red-900/30 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-exclamation-triangle text-red-400"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">{{ __('Traditional Module Systems') }}</h4>
                            <p class="text-sm text-slate-400 mt-1">
                                {{ __('Modules depend on parent application dependencies, causing version conflicts and breaking changes.') }}
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 rounded-lg bg-green-900/30 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check-circle text-green-400"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">{{ __('Elymod Solution') }}</h4>
                            <p class="text-sm text-slate-400 mt-1">
                                {{ __('Each module is truly independent. Dependencies are installed within the module, never searching the parent vendor.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Architecture -->
    <section id="architecture" class="bg-gradient-to-b from-slate-950 to-slate-900 border-y border-slate-800">
        <div class="max-w-7xl mx-auto px-6 py-20">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">{{ __('Architecture: Independent Module Framework') }}</h2>
                <p class="text-slate-300 max-w-3xl mx-auto">
                    {{ __('Elymod provides a complete Laravel-like environment for each module, powered by Laravel Runtime bridge.') }}
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Left Column: Architecture Flow -->
                <div>
                    <h3 class="text-2xl font-semibold mb-6">{{ __('Dependency Flow') }}</h3>

                    <div class="relative">
                        <!-- Vertical line -->
                        <div
                            class="absolute left-6 top-0 bottom-0 w-0.5 bg-gradient-to-b from-indigo-500/30 to-purple-500/30">
                        </div>

                        <!-- Step 1 -->
                        <div class="relative mb-8 ml-12">
                            <div
                                class="w-12 h-12 rounded-xl bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center absolute -left-16">
                                <i class="fas fa-server text-white"></i>
                            </div>
                            <div class="rounded-2xl bg-slate-800/50 p-6 border border-slate-700">
                                <h4 class="font-bold text-lg mb-2">{{ __('OAuth2 Passport Server') }}</h4>
                                <p class="text-sm text-slate-400">{{ __('Main application that loads modules') }}</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="relative mb-8 ml-12">
                            <div
                                class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center absolute -left-16">
                                <i class="fas fa-cube text-white"></i>
                            </div>
                            <div class="rounded-2xl gradient-border p-6 bg-slate-900/80">
                                <h4 class="font-bold text-lg mb-2">{{ __('Module (Shop/Auth/Users)') }}</h4>
                                <p class="text-sm text-slate-400">{{ __('Independent module with own dependencies') }}
                                </p>
                                <div class="mt-3 pt-3 border-t border-slate-800">
                                    <div class="text-xs text-slate-500">{{ __('Depends on:') }}</div>
                                    <div class="text-sm text-purple-400 font-medium">elyerr/elymod</div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="relative mb-8 ml-12">
                            <div
                                class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-600 to-purple-600 flex items-center justify-center absolute -left-16">
                                <i class="fas fa-cogs text-white"></i>
                            </div>
                            <div class="rounded-2xl bg-slate-800/50 p-6 border border-slate-700">
                                <h4 class="font-bold text-lg mb-2">{{ __('Elymod Framework') }}</h4>
                                <p class="text-sm text-slate-400">{{ __('Mini-framework with Laravel Runtime') }}</p>
                                <div class="mt-3 pt-3 border-t border-slate-800">
                                    <div class="text-xs text-slate-500">{{ __('Provides:') }}</div>
                                    <div class="text-sm text-cyan-400 font-medium">
                                        {{ __('Artisan commands, Service Container, etc.') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Key Features -->
                <div>
                    <h3 class="text-2xl font-semibold mb-6">{{ __('Laravel Runtime Bridge') }}</h3>

                    <div class="rounded-2xl code-block border border-slate-800 p-6 mb-8">
                        <div class="flex items-center gap-2 mb-4">
                            <i class="fas fa-terminal text-green-400"></i>
                            <h4 class="font-medium text-slate-300">{{ __('Familiar Artisan Experience') }}</h4>
                        </div>
                        <p class="text-slate-400 text-sm mb-4">
                            {{ __('Laravel Runtime provides a minimal Laravel bridge that enables familiar Artisan commands while removing unnecessary overhead.') }}
                        </p>
                        <pre class="text-sm text-slate-300 font-mono bg-slate-900/50 rounded-lg p-4 overflow-x-auto">
<span class="text-cyan-400">php artisan</span> make:controller ShopController
<span class="text-cyan-400">php artisan</span> make:model Product
<span class="text-cyan-400">php artisan</span> make:migration create_products_table
<span class="text-cyan-400">php artisan</span> make:serviceprovider ShopServiceProvider</pre>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div
                                class="w-10 h-10 rounded-lg bg-indigo-900/30 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-code text-indigo-400"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">{{ __('Laravel-Like Structure') }}</h4>
                                <p class="text-slate-400 text-sm mt-1">
                                    {{ __('Maintains familiar Laravel directory structure (app/, config/, database/) but lightweight.') }}
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-10 h-10 rounded-lg bg-purple-900/30 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-tools text-purple-400"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">{{ __('Essential Commands Only') }}</h4>
                                <p class="text-slate-400 text-sm mt-1">
                                    {{ __('Includes only make:* commands and essential utilities. Removes unnecessary Laravel components.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Module Isolation -->
    <section id="isolation" class="max-w-7xl mx-auto px-6 py-20">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">{{ __('Complete Module Isolation') }}</h2>
            <p class="text-slate-300 max-w-3xl mx-auto">
                {{ __('Each module is a self-contained unit with its own dependencies, preventing conflicts with other modules or the parent application.') }}
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Module Structure -->
            <div>
                <div class="rounded-2xl code-block border border-slate-800 p-6 mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-folder-tree text-emerald-400"></i>
                            <h4 class="font-medium text-slate-300">{{ __('Module Directory Structure') }}</h4>
                        </div>
                        <div class="flex items-center gap-1">
                            <div class="w-2 h-2 rounded-full bg-red-500"></div>
                            <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                            <div class="w-2 h-2 rounded-full bg-green-500"></div>
                        </div>
                    </div>
                    <pre class="text-sm text-slate-300 font-mono overflow-x-auto">
<span class="text-emerald-400">modules/shop/</span>                    <span class="text-slate-500"># Independent Shop Module</span>
├── <span class="text-cyan-400">src/</span>                     <span class="text-slate-500"># Module source code</span>
│   ├── <span class="text-blue-400">Controllers/</span>
│   ├── <span class="text-blue-400">Models/</span>
│   ├── <span class="text-blue-400">Services/</span>
│   └── <span class="text-purple-400">ShopServiceProvider.php</span>
├── <span class="text-cyan-400">config/</span>                 <span class="text-slate-500"># Module configuration</span>
├── <span class="text-cyan-400">database/</span>               <span class="text-slate-500"># Module migrations & seeders</span>
├── <span class="text-cyan-400">resources/</span>              <span class="text-slate-500"># Views, lang, assets</span>
├── <span class="text-cyan-400">vendor/</span>                 <span class="text-slate-500"># Module's own dependencies</span>
│   └── <span class="text-blue-400">some/package/</span>        <span class="text-slate-500"># Independent from parent</span>
└── <span class="text-cyan-400">composer.json</span>          <span class="text-slate-500"># Module-specific dependencies</span></pre>
                </div>
            </div>

            <!-- Dependency Resolution -->
            <div>
                <div class="rounded-2xl glass-card p-6 mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-10 h-10 rounded-lg bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center">
                            <i class="fas fa-project-diagram text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">{{ __('Dependency Resolution') }}</h4>
                            <p class="text-sm text-slate-400">{{ __('How modules find and load dependencies') }}</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white text-xs font-bold">1</span>
                            </div>
                            <div>
                                <h5 class="font-medium">{{ __('Module Vendor Directory') }}</h5>
                                <p class="text-slate-400 text-sm mt-1">
                                    {{ __('First checks modules/shop/vendor/ for dependencies. Never looks in parent vendor.') }}
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white text-xs font-bold">2</span>
                            </div>
                            <div>
                                <h5 class="font-medium">{{ __('Elymod Framework') }}</h5>
                                <p class="text-slate-400 text-sm mt-1">
                                    {{ __('If not found in module, uses elyerr/elymod dependencies. The mini-framework provides core functionality.') }}
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-indigo-500 flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white text-xs font-bold">3</span>
                            </div>
                            <div>
                                <h5 class="font-medium">{{ __('No Parent Fallback') }}</h5>
                                <p class="text-slate-400 text-sm mt-1">
                                    {{ __('Crucially, modules NEVER fall back to parent application dependencies. Complete isolation.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Benefits -->
        <div class="mt-12 grid md:grid-cols-3 gap-6">
            <div class="rounded-xl glass-card p-6">
                <div class="w-12 h-12 rounded-lg bg-indigo-900/30 flex items-center justify-center mb-4">
                    <i class="fas fa-lock text-indigo-400"></i>
                </div>
                <h4 class="font-semibold mb-2">{{ __('Version Safety') }}</h4>
                <p class="text-sm text-slate-400">
                    {{ __('Modules can use different dependency versions without conflicting with the parent or other modules.') }}
                </p>
            </div>

            <div class="rounded-xl glass-card p-6">
                <div class="w-12 h-12 rounded-lg bg-purple-900/30 flex items-center justify-center mb-4">
                    <i class="fas fa-code-branch text-purple-400"></i>
                </div>
                <h4 class="font-semibold mb-2">{{ __('Independent Development') }}</h4>
                <p class="text-sm text-slate-400">
                    {{ __('Teams can develop modules independently, without coordinating dependency updates with the main application.') }}
                </p>
            </div>

            <div class="rounded-xl glass-card p-6">
                <div class="w-12 h-12 rounded-lg bg-cyan-900/30 flex items-center justify-center mb-4">
                    <i class="fas fa-rocket text-cyan-400"></i>
                </div>
                <h4 class="font-semibold mb-2">{{ __('Easy Distribution') }}</h4>
                <p class="text-sm text-slate-400">
                    {{ __('Modules can be packaged and distributed independently, including all their dependencies.') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="bg-gradient-to-b from-slate-900 to-slate-950 py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">{{ __('Core Features') }}</h2>
                <p class="text-slate-300 max-w-2xl mx-auto">
                    {{ __('Everything you need for building truly independent OAuth2 modules') }}
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="rounded-2xl glass-card p-8 hover-lift">
                    <div
                        class="w-14 h-14 rounded-xl bg-gradient-to-br from-indigo-600 to-indigo-700 flex items-center justify-center mb-6">
                        <i class="fas fa-box text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">{{ __('Self-Contained Dependencies') }}</h3>
                    <p class="text-slate-400">
                        {{ __('Each module installs and manages its own dependencies. No reliance on parent application packages.') }}
                    </p>
                </div>

                <div class="rounded-2xl glass-card p-8 hover-lift">
                    <div
                        class="w-14 h-14 rounded-xl bg-gradient-to-br from-purple-600 to-purple-700 flex items-center justify-center mb-6">
                        <i class="fas fa-terminal text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">{{ __('Laravel Artisan Commands') }}</h3>
                    <p class="text-slate-400">
                        {{ __('Full Laravel development experience with make commands, migrations, and familiar workflows.') }}
                    </p>
                </div>

                <div class="rounded-2xl glass-card p-8 hover-lift">
                    <div
                        class="w-14 h-14 rounded-xl bg-gradient-to-br from-cyan-600 to-cyan-700 flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">{{ __('Service Container Integration') }}</h3>
                    <p class="text-slate-400">
                        {{ __('Full service container support. Modules can register their own service providers and bindings.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="max-w-4xl mx-auto px-6 py-20 text-center">
        <div class="rounded-3xl gradient-border p-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">{{ __('Start Building Independent Modules') }}</h2>
            <p class="text-slate-300 text-lg mb-8 max-w-2xl mx-auto">
                {{ __('Build truly independent OAuth2 modules with Elymod. No dependency conflicts, separate licensing, and familiar Laravel workflow.') }}
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="https://github.com" target="_blank"
                    class="rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 px-8 py-4 font-semibold hover:from-indigo-500 hover:to-purple-500 transition hover-lift">
                    {{ __('Get Started on GitHub') }}
                </a>
                <a href="#architecture"
                    class="rounded-xl glass-card border border-slate-700 px-8 py-4 font-medium hover:bg-slate-800/50 transition hover-lift">
                    {{ __('View Documentation') }}
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-slate-800/50 bg-slate-950">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div
                            class="w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-600 to-purple-600 flex items-center justify-center">
                            <i class="fas fa-cube text-white"></i>
                        </div>
                        <span class="text-xl font-bold">Elymod</span>
                    </div>
                    <p class="text-slate-500 text-sm">
                        {{ __('A lightweight modular mini‑framework for Laravel OAuth2 modules.') }}
                    </p>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">{{ __('Resources') }}</h4>
                    <ul class="space-y-2">
                        <li><a href="#"
                                class="text-slate-400 hover:text-indigo-400 text-sm transition">{{ __('Documentation') }}</a>
                        </li>
                        <li><a href="#"
                                class="text-slate-400 hover:text-indigo-400 text-sm transition">{{ __('API Reference') }}</a>
                        </li>
                        <li><a href="#"
                                class="text-slate-400 hover:text-indigo-400 text-sm transition">{{ __('Examples') }}</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">{{ __('Community') }}</h4>
                    <ul class="space-y-2">
                        <li><a href="https://github.com" target="_blank"
                                class="text-slate-400 hover:text-indigo-400 text-sm transition">{{ __('GitHub') }}</a>
                        </li>
                        <li><a href="#"
                                class="text-slate-400 hover:text-indigo-400 text-sm transition">{{ __('Discord') }}</a>
                        </li>
                        <li><a href="#"
                                class="text-slate-400 hover:text-indigo-400 text-sm transition">{{ __('Twitter') }}</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">{{ __('Legal') }}</h4>
                    <ul class="space-y-2">
                        <li><a href="#"
                                class="text-slate-400 hover:text-indigo-400 text-sm transition">{{ __('License') }}</a>
                        </li>
                        <li><a href="#"
                                class="text-slate-400 hover:text-indigo-400 text-sm transition">{{ __('Privacy Policy') }}</a>
                        </li>
                        <li><a href="#"
                                class="text-slate-400 hover:text-indigo-400 text-sm transition">{{ __('Terms of Use') }}</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-800 mt-12 pt-8 flex flex-col md:flex-row justify-between gap-4">
                <p class="text-slate-500 text-sm">
                    &copy; 2025 Elymod — {{ __('Modular Mini Framework') }}
                </p>
                <p class="text-slate-500 text-sm">
                    {{ __('Designed & built by') }} <span class="text-slate-300">Elvis Yerel Roman Concha</span>
                </p>
            </div>
        </div>
    </footer>

</body>

</html>
