<?php

use Illuminate\Database\Seeder;

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
        $customer->docuemnt_type = "Carnet";
        $customer->docuemnt_num = "6178926";
        $customer->address = "Obrajes";
        $customer->phone = "60653243";
        $customer->emaill = "diegoalecl10@gmail.com";
        $customer->save();
           }
}
