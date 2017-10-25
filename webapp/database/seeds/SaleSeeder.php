<?php

use Illuminate\Database\Seeder;
use App\Sale;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sales = new Sale;
        $sales->customer_id = "1";
        $sales->voucher_type = 'Boleta';
        $sales->voucher_series = '521' ;
        $sales->voucher_num = '275' ;
        $sales->date='2017-10-24';
        $sales->tax='18';
        $sales->sale_total = '45' ;
        $sales->state='A';
        $sales->save();
    }
}

