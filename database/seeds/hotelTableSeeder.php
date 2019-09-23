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
                'nama_hotel' => 'Fave Hotel Malang',
                'harga_hotel' => null
            ],
            [
                'id_paket' => 1,
                'nama_hotel' => 'Seulawah Grand View',
                'harga_hotel' => null
            ],
            [
                'id_paket' => 1,
                'nama_hotel' => 'Radho Syariah Hotel',
                'harga_hotel' => null
            ],
            [
                'id_paket' => 2,
                'nama_hotel' => 'Penginapan Semalam Sebelum ke Bromo',
                'harga_hotel' => null
            ],
        ]);
    }
}
