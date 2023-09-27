<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Income;
use App\Models\IncomeArticle;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $incomes_articles = IncomeArticle::factory(10)->create();
        $tags = Tag::factory(30)->create();
        Income::factory(100)->create();

        foreach ($incomes_articles as $article) {
            $tagsId = $tags->random(random_int(1, 5))->pluck('id');
            $article->tags()->attach($tagsId);
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
