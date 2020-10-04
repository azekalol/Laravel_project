<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('home');
})-> name('home');

Route::get('/about', function () {
    return view('about');
})-> name('about');

Route::get('/contact', function () {
    return view('contact');
})-> name('contact');

Route::get('/login', function () {
    return view('login');
})-> name('login');

Route::get('/signup', function () {
    return view('signup');
})-> name('signup');
                              //Странно почему тут мне набо указывать полный путь
                              // Второй вариант. Если проект новый,App\Providers\RouteServiceProvider
                              // открыть или указать полный путь 'App\Http\Controllers\FormController@show'
Route::post('/login/submit', 'FormController@login')-> name('login-form');

Route::post('/signup/submit', 'FormController@signup')-> name('signup-form');
