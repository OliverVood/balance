<?php

namespace App\Http\Controllers;

use App\Models\IncomeArticle;
use App\Models\Tag;
use Illuminate\Http\Request;

class IncomeArticleController extends Controller
{
    public function index() {
        $articles = IncomeArticle::all();
        return view('income_articles.index', compact('articles'));
    }

    public function show(IncomeArticle $article) {
//        dd($article->incomes);
//        dd($article->tags);
        return view('income_articles.show', compact('article'));
    }

    public function create() {
        $tags = Tag::all();
        return view('income_articles.create', compact('tags'));
    }

    public function edit(IncomeArticle $article) {
        $tags = Tag::all();
        return view('income_articles.edit', compact('article', 'tags'));
    }

    public function store() {
        $data = \request()->validate([
            'name' => 'string',
            'description' => 'string',
            'tags' => '',
        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $article = IncomeArticle::create($data);
        $article->tags()->attach($tags);
//        foreach ($tags as $tag) {
//            IncomeArticleTag::firstOrCreate([
//                'article_id' => $article->id,
//                'tag_id' => $tag
//            ]);
//        }

        return redirect()->route('income_article.index');
    }

    protected function update(IncomeArticle $article) {
        $data = \request()->validate([
            'name' => 'string',
            'description' => 'string',
            'tags' => '',
        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $article->update($data);
        $article->tags()->sync($tags);

        return redirect()->route('income_article.show', $article->id);
    }

    protected function destroy(IncomeArticle $article) {
        $article->delete();

        return redirect()->route('income_article.index');
    }
}
