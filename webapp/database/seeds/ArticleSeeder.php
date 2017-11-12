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
        //LAVADORAS
        $article = new Article();
        $article->code = "1234";
        $article->name = "LAVADORA LG 5KG";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "45";
        $article->save();

        $article = new Article();
        $article->code = "1235";
        $article->name = "LAVADORA LG 7KG";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "75";
        $article->save();


        $article = new Article();
        $article->code = "1236";
        $article->name = "LAVADORA LG 10KG";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "95";
        $article->save();

        $article = new Article();
        $article->code = "1237";
        $article->name = "LAVADORA SAMSUNG 5KG";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "48";
        $article->save();

        $article = new Article();
        $article->code = "1238";
        $article->name = "LAVADORA SAMSUNG 7KG";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "78";
        $article->save();


        $article = new Article();
        $article->code = "1239";
        $article->name = "LAVADORA SAMSUNG 10KG";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "98";
        $article->save();

        //TELEVISORES
        $article = new Article();
        $article->code = "2000";
        $article->name = "SMART TV 65p 4K SONY";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "1600";
        $article->save();

        $article = new Article();
        $article->code = "2001";
        $article->name = "SMART TV 55p 4K SONY";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "1300";
        $article->save();

        $article = new Article();
        $article->code = "2002";
        $article->name = "SMART TV 42p 4K SONY";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "900";
        $article->save();

        $article = new Article();
        $article->code = "2003";
        $article->name = "SMART TV 32p 4K SONY";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "500";
        $article->save();

        $article = new Article();
        $article->code = "2100";
        $article->name = "SMART TV CURVED 65p 4K SAMSUNG";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "1600";
        $article->save();

        $article = new Article();
        $article->code = "2101";
        $article->name = "SMART TV CURVED 55p 4K SAMSUNG";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "1300";
        $article->save();

        $article = new Article();
        $article->code = "2102";
        $article->name = "SMART TV CURVED 42p 4K SAMSUNG";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "900";
        $article->save();

        $article = new Article();
        $article->code = "2103";
        $article->name = "SMART TV CURVED 32p 4K SAMSUNG";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "500";
        $article->save();

        //BLU-RAY
        $article = new Article();
        $article->code = "3000";
        $article->name = "BLU-RAY SONY 4K WIFI";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "45";
        $article->save();

        $article = new Article();
        $article->code = "3001";
        $article->name = "BLU-RAY SONY FULLHD WIFI";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "35";
        $article->save();

        $article = new Article();
        $article->code = "3002";
        $article->name = "BLU-RAY SONY WIFI";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "25";
        $article->save();

        $article = new Article();
        $article->code = "3100";
        $article->name = "BLU-RAY SAMSUNG 4K WIFI";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "44";
        $article->save();

        $article = new Article();
        $article->code = "3101";
        $article->name = "BLU-RAY SAMSUNG FULLHD WIFI";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "34";
        $article->save();

        $article = new Article();
        $article->code = "3102";
        $article->name = "BLU-RAY SAMSUNG WIFI";
        $article->stock = "61";
        $article->state = "A";
        $article->sale_price = "24";
        $article->save();

    }
}
