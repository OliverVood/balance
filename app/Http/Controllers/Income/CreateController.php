<?php

namespace App\Http\Controllers\Income;

use App\Models\IncomeArticle;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $articles = IncomeArticle::all();
        return view('incomes.create', compact('articles'));
    }
}
