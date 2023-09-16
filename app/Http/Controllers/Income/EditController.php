<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Models\Income;
use App\Models\IncomeArticle;

class EditController extends Controller
{
    public function __invoke(Income $income) {
        $articles = IncomeArticle::all();
        return view('incomes.edit', compact('income', 'articles'));
    }
}
