<?php

namespace App\Http\Controllers\Admin\Income;

use App\Http\Controllers\Controller;
use App\Http\Filters\IncomeFilter;
use App\Http\Requests\Income\IndexRequest;
use App\Models\Income;

class IndexController extends Controller
{
    public function __invoke(IndexRequest $request)
    {
        $data = $request->validated();
        $filters = app()->make(IncomeFilter::class, ['queryParams' => array_filter($data)]);
        $incomes = Income::filter($filters)->paginate(10);
//        $incomes = Income::paginate(10);
        return view('admin.income.index', compact('incomes'));
    }
}
