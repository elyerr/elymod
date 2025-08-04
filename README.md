# Elymod

**Elymod** is a lightweight modular mini-framework born from Laravel, designed for the creation of fully independent modules within the [oauth2-passport-server](https://github.com/elyerr/oauth2-passport-server) system.

## 🔧 Philosophy

Elymod's goal is to promote separation of concerns and modularity, allowing each module to:

* Have its own routing, migrations, controllers, models, configurations, and resources.
* Register only when enabled or installed.
* Handle its own dependencies independently.
* Fail without affecting the rest of the system.

This design ensures that the core system remains stable and scalable, regardless of the modules installed.

## ⚙️ Features

* 📦 Each module is structured as a mini Laravel package.
* 💥 Fail-safe: A module error will not crash the system.
* 🧩 Simple integration with Composer-based module installation.
* 📁 Example of a typical module structure:

```plaintext
├── app
│   ├── Http
│   │   ├── Controllers       # HTTP controllers specific to the module
│   │   ├── Middleware        # Module-specific middleware
│   │   └── Requests          # Form request validation classes
│   ├── Models               # Eloquent models for the module
│   ├── ModuleServiceProvider.php  # Registers module bindings and services
│   ├── Notifications        # Custom notifications
│   ├── Repositories         # Business logic abstraction layer
│   └── Services             # Services or handlers used by the module
├── artisan                 # CLI entry point
├── bootstrap               # Bootstrapping module environment
├── composer.json           # Module-specific dependencies and metadata
├── config
│   ├── elymod.php          # Core configuration for the module
│   └── menu.php            # UI menu entries or routes
├── database
│   ├── database.sqlite     # Local development DB
│   ├── factories           # Model factories
│   ├── migrations          # Database migrations
│   └── seeders             # Default data seeders
├── LICENSE                 # License file (MIT)
├── public                  # Public assets (index, favicon, etc.)
├── README.md               # Module documentation
├── resources
│   ├── css
│   ├── img
│   ├── js
│   ├── scss
│   └── views               # Blade templates
│       └── example.blade.php
├── routes
│   ├── api.php             # API routes
│   ├── kernel.php          # Route middleware registration
│   └── web.php             # Web routes
├── storage                 # Storage directory
└── support                 # Mini oauth2-passport-server emulator only in dev mode
    ├── app
    │   ├── Http
    │   │   ├── Controllers
    │   │   │   ├── ApiController.php
    │   │   │   ├── Controller.php
    │   │   │   ├── LoginController.php
    │   │   │   ├── UserController.php
    │   │   │   └── WebController.php
    │   │   ├── kernel.php
    │   │   └── Middleware
    │   │       ├── CheckForAnyScope.php
    │   │       ├── CheckScopes.php
    │   │       └── UserCanAny.php
    │   └── Models
    │       ├── Auth.php
    │       ├── Subscription
    │       │   └── Group.php
    │       └── User
    │           ├── Scope.php
    │           └── User.php
    ├── migrations
    │   ├── 2025_07_28_213723_create_users_table.php
    │   ├── 2025_07_28_213732_create_scopes_table.php
    │   ├── 2025_07_28_213741_create_groups_table.php
    │   ├── 2025_07_28_213749_create_user_group_table.php
    │   └── 2025_07_28_213801_create_scope_user_table.php
    ├── views
    │   ├── login.blade.php
    │   ├── users.blade.php
    │   └── welcome.blade.php
    └── web.php              # Development-only route file
```

## 📜 License

Elymod is licensed under the **MIT License**.

> Each module can define its own license and rules independently.

## 📬 Author

**Elvis Yerel Roman Concha**
Email: [yerel9212@yahoo.es](mailto:yerel9212@yahoo.es)

---

If you use or build with Elymod, feel free to contribute or share feedback to improve this open modular architecture!