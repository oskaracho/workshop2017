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
        $product->product_name = "LAVADORA";
        $product->product_description = "LAVADORAS PARA EL HOGAR DE DIFERENTES CAPACIDADES Y MARCAS";
        $product->product_date_up = "18/10/2017";
        $product->product_date_down = "18/12/2017";
        $product->save();

        $product = new Product;
        $product->product_name = "SMART TV";
        $product->product_description = "SMART TV DE DIFERENTES TAMAÑOS Y MARCAS";
        $product->product_date_up = "18/10/2017";
        $product->product_date_down = "18/12/2017";
        $product->save();

        $product = new Product;
        $product->product_name = "BLU-RAY";
        $product->product_description = "LECTORES BLU-RAY DIFERENTES MARCAS Y CARACTERISTICAS";
        $product->product_date_up = "18/10/2017";
        $product->product_date_down = "18/12/2017";
        $product->save();

        $product = new Product;
        $product->product_name = "HELADERA";
        $product->product_description = "HELADERAS DE UN Y DOS CUERPOS DIFERENTES CAPACIDADES";
        $product->product_date_up = "18/10/2017";
        $product->product_date_down = "18/12/2017";
        $product->save();

        $product = new Product;
        $product->product_name = "HORNO MICROONDA";
        $product->product_description = "MICROONDAS DE MUCHAS CAPACIDADES";
        $product->product_date_up = "18/10/2017";
        $product->product_date_down = "18/12/2017";
        $product->save();
    }
}
