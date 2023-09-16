<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Models\Income;

class ShowController extends Controller
{
    public function __invoke(Income $income)
    {
//        dd($income->article);
        return view('incomes.show', compact('income'));
    }
}
