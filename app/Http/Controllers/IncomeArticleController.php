<?php

namespace App\Http\Controllers;

use App\Models\IncomeArticle;
use Illuminate\Http\Request;

class IncomeArticleController extends Controller
{
    public function index() {
        $articles = IncomeArticle::all();
        return view('incomes/incomes', compact('articles'));
    }

    public function create() {
        $article = [
            'name' => 'Name 3',
            'description' => 'Desc 3',
        ];

        IncomeArticle::create($article);
    }

    protected function update() {
        $label = IncomeArticle::find(2);

        $label->update([
            'name' => 'update Name 1',
            'description' => 'update Desc 2',
        ]);
    }

    protected function delete() {
        $label = IncomeArticle::find(2);

        $label->delete();
    }
}
