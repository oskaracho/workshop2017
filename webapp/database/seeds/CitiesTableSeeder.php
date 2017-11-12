<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = Array("La Paz", "Cochabamba", "Santa Cruz", "Tarija");
        $c = 1;
        for ($i=0;$i<4;$i++)
        {

        DB::table('cities')->insert([
            'id' => $c++,
            'name' => $city[$i]]);
        }

    }
}
