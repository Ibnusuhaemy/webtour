<?php

use Illuminate\Database\Seeder;

class durasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('durasi')->insert([
            [
                'id_paket' => 1,
                'jam' => null,
                'hari' => 4,
                'malam' => 3
            ],
            [
                'id_paket' => 2,
                'jam' => null,
                'hari' => 2,
                'malam' => 1
            ],
            [
                'id_paket' => 3,
                'jam' => null,
                'hari' => 1,
                'malam' => null
            ],
            [
                'id_paket' => 4,
                'jam' => 12,
                'hari' => null,
                'malam' => null
            ]
        ]);
    }
}
