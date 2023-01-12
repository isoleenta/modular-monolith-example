<?php

use Illuminate\Support\Facades\Route;

Route::controller('RegistrationController')->group(function (){
    Route::post('/register', 'register')->name('register');
});

Route::controller('LoginController')->group(function (){
    Route::post('/login', 'login')->name('register');
});
