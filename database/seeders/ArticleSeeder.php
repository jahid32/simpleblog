<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = Article::factory()->count(20)->create();

        foreach ($articles as $article) {
            $categories = Category::inRandomOrder()->limit(1)->get();
            $article->categories()->sync($categories->pluck('id'));
        }
        foreach ($articles as $article) {
            $tags = Tag::inRandomOrder()->limit(5)->get();
            $article->tags()->sync($tags->pluck('id'));
        }
    }
}
