<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Olá Mundo da raiz";
});

Route::get('/teste', function () {
    echo "Olá Mundo do teste";
});
