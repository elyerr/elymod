<?php

use Elyerr\Elymod\Http\Controllers\TestController;

/**
 * Register routes API
 */

Route::get('/elymod', [TestController::class, 'index'])->name('test');