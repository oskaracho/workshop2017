<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product;
        $product->product_name = "SMART TV 65p 4K SONY";
        $product->product_description = "Smart TV WIFI 4K SUPER AMOLED";
        $product->product_price = "1600";
        $product->product_date_up = "18/10/2017";
        $product->product_date_down = "18/12/2017";
        $product->save();

        $product = new Product;
        $product->product_name = "SMART TV 55p 4K SONY";
        $product->product_description = "Smart TV WIFI 4K SUPER AMOLED";
        $product->product_price = "1300";
        $product->product_date_up = "18/10/2017";
        $product->product_date_down = "18/12/2017";
        $product->save();

        $product = new Product;
        $product->product_name = "SMART TV 42p 4K SONY";
        $product->product_description = "Smart TV WIFI 4K LED";
        $product->product_price = "900";
        $product->product_date_up = "18/10/2017";
        $product->product_date_down = "18/12/2017";
        $product->save();

        $product = new Product;
        $product->product_name = "SMART TV 32p 4K SONY";
        $product->product_description = "Smart TV WIFI 4K LED";
        $product->product_price = "500";
        $product->product_date_up = "18/10/2017";
        $product->product_date_down = "18/12/2017";
        $product->save();
    }
}
