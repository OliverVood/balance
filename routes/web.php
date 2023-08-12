<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeArticleController;
use App\Http\Controllers\TestController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/income_articles', [IncomeArticleController::class, 'index'])->name('income_article.index');
Route::get('/income_articles/create', [IncomeArticleController::class, 'create'])->name('income_article.create');
Route::get('/income_articles/update', [IncomeArticleController::class, 'update'])->name('income_article.update');
Route::get('income_articles/delete', [IncomeArticleController::class, 'delete'])->name('income_article.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
