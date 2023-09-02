<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\IncomeArticle;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index() {
        $incomes = Income::all();
        return view('incomes.index', compact('incomes'));
    }

    public function show(Income $income) {
//        dd($income->article);
        return view('incomes.show', compact('income'));
    }

    public function create() {
        $articles = IncomeArticle::all();
        return view('incomes.create', compact('articles'));
    }

    public function edit(Income $income) {
        $articles = IncomeArticle::all();
        return view('incomes.edit', compact('income', 'articles'));
    }

    public function store() {
        $data = \request()->validate([
            'article_id' => 'integer',
            'amount' => 'numeric'
        ]);
        Income::create($data);

        return redirect()->route('income.index');
    }

    public function update(Income $income) {
        $data = \request()->validate([
            'article_id' => 'integer',
            'amount' => 'numeric'
        ]);
        $income->update($data);

        return redirect()->route('income.show', $income->id);
    }

    public function destroy(Income $article) {
        $article->delete();

        return redirect()->route('income.index');
    }
}
