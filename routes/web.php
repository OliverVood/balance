<?php

use App\Http\Controllers\Income;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeArticleController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin;

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
Route::post('/income_articles', [IncomeArticleController::class, 'store'])->name('income_article.store');
Route::get('/income_articles/{article}', [IncomeArticleController::class, 'show'])->name('income_article.show');
Route::get('/income_articles/{article}/edit', [IncomeArticleController::class, 'edit'])->name('income_article.edit');
Route::patch('/income_articles/{article}', [IncomeArticleController::class, 'update'])->name('income_article.update');
Route::delete('/income_articles/{article}', [IncomeArticleController::class, 'destroy'])->name('income_article.delete');

Route::group(['namespace' => ''], function() {
    Route::get('/incomes', Income\IndexController::class)->name('income.index');
    Route::get('/incomes/create', Income\CreateController::class)->name('income.create');
    Route::post('/incomes', Income\StoreController::class)->name('income.store');
    Route::get('/incomes/{income}', Income\ShowController::class)->name('income.show');
    Route::get('/incomes/{income}/edit', Income\EditController::class)->name('income.edit');
    Route::patch('/incomes/{income}', Income\UpdateController::class)->name('income.update');
    Route::delete('/incomes/{income}', Income\DestroyController::class)->name('income.delete');
});

Route::group(['namespace' => '', 'prefix' => 'admin'], function() {
    Route::group([], function() {
        Route::get('/income', Admin\Income\IndexController::class)->name('admin.income.index');
    });
});

Route::get('/admin', [MainController::class, 'index'])->name('main.index');
