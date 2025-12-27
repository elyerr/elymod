<?php

use {{ Namespace }}\App\Http\Controllers\TestController;

/**
 * Register admin routes
 */

Route::get('/', [TestController::class, 'admin'])->name('admin');