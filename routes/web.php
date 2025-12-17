<?php

Route::get('/', function () {
    return view("Elymod::welcome");
})->name('welcome');