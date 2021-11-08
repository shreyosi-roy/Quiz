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
//logout route
Route::get('/logout', [UserController::class, 'logout']);
//registration ui view
Route::get('/registration', function () {
    return view('auth.registration');
});
//submit new user
Route::post('submit-user', [UserController::class, 'submit'])->name('submit-user');


Route::group(['middleware' => ['loginauth']], function () {
    // dashboard view
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::group(['middleware' => ['adminauth']], function () {

        //quiz question upload ui view
        Route::get('/upload', function () {
            return view('question.upload');
        });
        //submit quiz question
        Route::post('submit', [QuizController::class, 'submit'])->name('submit');
    });


        // result viewing UI
        Route::get('/view-result', function () {
            return view('user.view-result');
        });
        //view quiz screen
        Route::get('/quiz', [QuizController::class, 'getquiz']);
        //quiz submit
        Route::post('/quizsubmit', [QuizController::class, 'quizsubmit'])->name('quizsubmit');
    
});
