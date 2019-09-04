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
            ]
        ]);
    }
}
