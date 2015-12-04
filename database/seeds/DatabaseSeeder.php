<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //$this->call(UserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        $this->call(PageTableSeeder::class);
        //\App\User::truncate();
        //factory(\App\User::class,100)->create();

        Model::reguard();
    }
}
