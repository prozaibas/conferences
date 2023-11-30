<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/articles/{id}', function ($articleid) {
    $articles =[
        1=> [
        'title'=> "article $articleid",
        'content'=>"$articleid$articleid$articleid$articleid"
        ],
        2=> [
            'title'=> "article $articleid",
        'content'=>"$articleid$articleid$articleid$articleid"
    
        ]];
    return view('articles',['article' => $articles[$articleid]]);
});


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
