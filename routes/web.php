<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;

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

Route::get('/', [ArticleController::class, 'index'])
    ->name('articles.index');

Route::resource('/articles', ArticleController::class)
    ->except(['index'])->middleware('auth');

Auth::routes();
/**
 * Method, Path, Controller, Action
 * 
 * ユーザー登録画面
 * GET, /register, App/Http/Controllers/Auth/RegisterController, showResistrationForm
 * 
 * ユーザー登録フォーム送信
 * POST, /register, App/Http/Controllers/Auth/RegisterController, register
 * 
 * ログアウト
 * POST, /logout, App/Http/Controllers/Auth/LoginController, logout
 * 
 * ログインフォーム画面
 * GET, /login, App/Http/Controllers/Auth/LoginController, showLoginForm
 * 
 * ログインフォーム送信
 * POST, /login, App/Http/Controllers/Auth/LoginController, login
 * 
 */




