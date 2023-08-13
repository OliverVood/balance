<?php

namespace App\Http\Controllers;

use App\Models\IncomeArticle;
use Illuminate\Http\Request;

class IncomeArticleController extends Controller
{
    public function index() {
        $articles = IncomeArticle::all();
        return view('income_articles.index', compact('articles'));
    }

    public function show(IncomeArticle $article) {
        return view('income_articles.show', compact('article'));
    }

    public function create() {
        return view('income_articles.create');
    }

    public function edit(IncomeArticle $article) {
        return view('income_articles.edit', compact('article'));
    }

    public function store() {
        $data = \request()->validate([
            'name' => 'string',
            'description' => 'string'
        ]);
        IncomeArticle::create($data);

        return redirect()->route('income_article.index');
    }

    protected function update(IncomeArticle $article) {
        $data = \request()->validate([
            'name' => 'string',
            'description' => 'string'
        ]);
        $article->update($data);

        return redirect()->route('income_article.show', $article->id);
    }

    protected function destroy(IncomeArticle $article) {
        $article->delete();

        return redirect()->route('income_article.index');
    }
}
