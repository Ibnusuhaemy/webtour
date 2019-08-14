<?php

use Illuminate\Database\Seeder;

class paketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket')->insert([
            [
                'id_type' => 1,
                'nama_paket' => 'Malang Batu Tour',
                'gambar_paket' => 'sadawdu.jpg',
                'harga_dewasa' => 1500000,
                'harga_anak' => 1000000,
                'booked' => 5
            ],
            [
                'id_type' => 1,
                'nama_paket' => 'Bali Lombok Tour',
                'gambar_paket' => 'mdjnsd.jpg',
                'harga_dewasa' => 4500000,
                'harga_anak' => 3000000,
                'booked' => 4
            ]
        ]);
    }
}
