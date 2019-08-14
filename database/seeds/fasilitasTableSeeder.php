<?php

use Illuminate\Database\Seeder;

class fasilitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fasilitas')->insert([
            [
                'id_paket' => 1,
                'fasilitas1' => true,
                'fasilitas2' => true,
                'fasilitas3' => true,
                'fasilitas4' => false
            ],
            [
                'id_paket' => 2,
                'fasilitas1' => true,
                'fasilitas2' => true,
                'fasilitas3' => true,
                'fasilitas4' => false
            ],
        ]);
    }
}
