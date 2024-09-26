<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cat;

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/home', function () {
        $username = 'hkm';
        $password = 'motdepasse123';

        return view('bienvenue', compact('username', 'password'));

    });

Route::get('/calcul/{num1}/{num2}/', function ($num1, $num2) {
    $calcul = $num1 + $num2;
    return view('calcul', compact('calcul'));
});

Route::get('/cats', function () {
    $cats = Cat::all();
    return view('index', compact('cats'));
});

//Afficher le chat 1
Route::get('/cats/{id}', function ($id) {
    $cat = Cat::find($id);

    return view('show', compact('cat'));

});

//bouton affichage des détails des chats

Route::get('/affiche1', function ($id =1) {
    $button = Cat::find($id);

    return view('affiche1', compact('button'));

});

//Page de création de chats
Route::get('/create', function () {
    $button = Cat::all();

    return view('create', compact('button'));

});


