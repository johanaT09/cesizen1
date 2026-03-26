<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route API de test pour vérifier la connexion front/back
Route::get('/api/ping', function () {
    return response()->json(['message' => 'pong']);
});
