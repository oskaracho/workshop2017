<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $customer = new Customer;
        $customer->name = "Pedro";
        $customer->document_type = "Carnet:";
        $customer->document_num = "6178926";
        $customer->address = "Obrajes";
        $customer->phone = "60653243";
        $customer->emaill = "diegoalecl10@gmail.com";
        $customer->save();
    }
}
