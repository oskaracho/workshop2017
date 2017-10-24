<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Saledetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('saledetail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sale_id');
            $table->integer('article_id');
            $table->integer('quantity');
            $table->integer('sale_price');
            $table->integer('discount');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('saledetail');
    }
}
