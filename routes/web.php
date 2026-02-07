<?php

use Illuminate\Support\Facades\Route;

// Ruta 1: GET - Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Ruta 2: GET - Página "Acerca de"
Route::get('/acerca-de', function () {
    return 'Esta es la página Acerca de';
});

// Ruta 3: GET - Página de contacto
Route::get('/contacto', function () {
    return view('contacto');
});

// Ruta 4: POST - Enviar formulario de contacto
Route::post('/contacto/enviar', function () {
    return 'Formulario enviado correctamente';
});

// Ruta 5: GET - Ruta con parámetro (ej: /usuario/123)
Route::get('/usuario/{id}', function ($id) {
    return "Mostrando usuario con ID: " . $id;
});