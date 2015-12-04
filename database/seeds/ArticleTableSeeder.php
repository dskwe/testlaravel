<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    public function run()
    {
        //DB::table('articles')->delete();
        //\App\Category::truncate();
        \App\Article::truncate();
        factory(App\Article::class, 40)->create();
    }
}
