<?php

Route::get('/', function () {
    return view('{{ Module }}::welcome');
})->name('welcome');