<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  Seed "articles"-table with 30 rows. !!! Singular "App\Article::" NOT "App\ArticleS" !!!
        factory(App\Article::class, 30)->create();
    }
}
