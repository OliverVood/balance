<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Models\Income;

class IndexController extends Controller
{
    public function __invoke()
    {
        $incomes = Income::all();
        return view('incomes.index', compact('incomes'));
    }
}
