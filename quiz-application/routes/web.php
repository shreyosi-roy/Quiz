<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;


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

Route::post('login', [UserController::class, 'check'])->name('login');


//registration ui view
Route::get('/registration', function () {
    return view('auth.registration');
});
Route::post('submit-user', [UserController::class, 'submit'])->name('submit-user');

//quiz question upload ui view

Route::get('/upload', function () {
    return view('question.upload');
});
Route::post('submit', [QuizController::class, 'submit'])->name('submit');

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

//logout route
Route::get('/logout', [UserController::class,'logout']);

Route::get('/quiz', [QuizController::class,'getquiz']);

Route::post('/quizsubmit', [QuizController::class,'quizsubmit'])->name('quizsubmit');