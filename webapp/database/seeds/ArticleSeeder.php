<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $article = new Article();
        $article->code = "1234";
        $article->name = "Lavadora";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "45";
        $article->save();

    }
}
