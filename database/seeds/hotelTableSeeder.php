<?php

use Illuminate\Database\Seeder;

class hotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotel')->insert([
            [
                'id_paket' => 1,
                '1' => null,
                '2' => 500000,
                '3' => 1000000,
                '4' => 1300000,
                '5' => 1500000
            ],
            [
                'id_paket' => 2,
                '1' => 400000,
                '2' => 1000000,
                '3' => null,
                '4' => 1500000,
                '5' => null
            ],
        ]);
    }
}
