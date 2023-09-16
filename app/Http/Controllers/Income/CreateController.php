<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Models\IncomeArticle;

class CreateController extends Controller
{
    public function __invoke()
    {
        $articles = IncomeArticle::all();
        return view('incomes.create', compact('articles'));
    }
}
