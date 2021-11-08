<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// landing screen

Route::get('/', function () {
    return view('auth.login');
});

//registration ui view
Route::get('/registration', function () {
    return view('auth.registration');
});
//quiz question upload ui view

Route::get('/upload', function () {
    return view('question.upload');
});

// dashboard view

Route::get('/dashboard', function () {
    return view('dashboard');
});

// quiz screen view

Route::get('/quiz', function () {
    return view('user.quiz');
});

// result viewing UI

Route::get('/view-result', function () {
    return view('user.view-result');
});