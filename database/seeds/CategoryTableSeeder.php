<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->delete();
        //\App\Category::truncate();
        //\App\Article::truncate();
        factory(App\Category::class, 5)->create();
    }
}
