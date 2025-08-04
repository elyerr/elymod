<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elymod — Modular Laravel Framework</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out both;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 font-inter">

    <!-- Navbar -->
    <nav class="w-full bg-gray-900 text-white py-4 px-6 flex justify-between items-center shadow-md">
        <div class="text-xl font-bold">Elymod</div>
        <a href="/login"
            class="bg-indigo-600 hover:bg-indigo-500 transition-all ease-in-out duration-300 px-4 py-2 rounded text-sm font-semibold">
            Login
        </a>
    </nav>

    <!-- Header -->
    <header class="bg-gray-800 text-white text-center py-20 px-6">
        <h1 class="text-4xl sm:text-5xl font-extrabold mb-4 fade-in">Elymod — Modular Laravel Framework</h1>
        <p class="text-lg sm:text-xl text-gray-300 fade-in">Build fully independent Laravel modules with ease</p>
    </header>

    <!-- Hero -->
    <section class="max-w-5xl mx-auto mt-16 px-4 text-center fade-in">
        <h2 class="text-2xl sm:text-3xl font-bold mb-4">Decoupled. Scalable. Developer-First.</h2>
        <p class="text-gray-600 text-lg">
            Elymod (powered by Elyerr Core) enables you to create reusable, pluggable modules in Laravel.
            Each module contains its own logic, assets, routes, and views — no core dependencies, no coupling.
        </p>
    </section>

    <!-- Features -->
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 max-w-6xl mx-auto my-20 px-4 fade-in">
        <div class="bg-white shadow-lg rounded-xl p-6 transition hover:shadow-xl">
            <h3 class="text-indigo-600 font-semibold text-xl mb-2">🔌 100% Isolated Modules</h3>
            <p class="text-gray-600">Modules live independently with their own namespaces, views, routes, migrations and
                configs.</p>
        </div>
        <div class="bg-white shadow-lg rounded-xl p-6 transition hover:shadow-xl">
            <h3 class="text-indigo-600 font-semibold text-xl mb-2">🧠 No Coupling, No Overhead</h3>
            <p class="text-gray-600">Add or remove features without touching your core system. Focus on modules; Elymod
                handles the rest.</p>
        </div>
        <div class="bg-white shadow-lg rounded-xl p-6 transition hover:shadow-xl">
            <h3 class="text-indigo-600 font-semibold text-xl mb-2">🚀 SaaS-Ready Architecture</h3>
            <p class="text-gray-600">Built-in support for scopes, user groups, and scalable multi-tenant patterns.</p>
        </div>
        <div class="bg-white shadow-lg rounded-xl p-6 transition hover:shadow-xl">
            <h3 class="text-indigo-600 font-semibold text-xl mb-2">🛠️ Dev Tools Included</h3>
            <p class="text-gray-600">Generate, install, and register modules with a single CLI command. Optimized for
                speed and DX.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 text-center py-6 text-sm">
        © 2025 Elyerr — Build independently, scale infinitely.
    </footer>

</body>

</html>
