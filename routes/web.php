<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeArticleController;
use App\Http\Controllers\IncomeController;

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

Route::get('/incomes', [IncomeController::class, 'index'])->name('income.index');
Route::get('/incomes/create', [IncomeController::class, 'create'])->name('income.create');
Route::post('/incomes', [IncomeController::class, 'store'])->name('income.store');
Route::get('/incomes/{income}', [IncomeController::class, 'show'])->name('income.show');
Route::get('/incomes/{income}/edit', [IncomeController::class, 'edit'])->name('income.edit');
Route::patch('/incomes/{income}', [IncomeController::class, 'update'])->name('income.update');
Route::delete('/incomes/{income}', [IncomeController::class, 'destroy'])->name('income.delete');
