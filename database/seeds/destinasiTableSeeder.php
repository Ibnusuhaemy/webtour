<?php

use Illuminate\Database\Seeder;

class destinasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinasi')->insert([
            [
                'id_paket' => 1,
                'nama_tempat_destinasi' => 'Petik Apel',
                'kota_destinasi' => 'Batu',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_destinasi/',
                'gambar_destinasi' => '1.jpg'
            ],
            [
                'id_paket' => 1,
                'nama_tempat_destinasi' => 'Coban Talun',
                'kota_destinasi' => 'Batu',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_destinasi/',
                'gambar_destinasi' => '2.jpg'
            ],
            [
                'id_paket' => 1,
                'nama_tempat_destinasi' => 'Dino Park (Jatimpark 3)',
                'kota_destinasi' => 'Batu',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_destinasi/',
                'gambar_destinasi' => '3.jpg'
            ],
            [
                'id_paket' => 1,
                'nama_tempat_destinasi' => 'The Legend Star (Jatimpark 3)',
                'kota_destinasi' => 'Batu',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_destinasi/',
                'gambar_destinasi' => '4.jpg'
            ],
            [
                'id_paket' => 1,
                'nama_tempat_destinasi' => 'Alun-alun Kota Wisata Batu',
                'kota_destinasi' => 'Batu',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_destinasi/',
                'gambar_destinasi' => '5.jpg'
            ],
            [
                'id_paket' => 1,
                'nama_tempat_destinasi' => 'Pos Ketan Legenda',
                'kota_destinasi' => 'Batu',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_destinasi/',
                'gambar_destinasi' => '6.jpg'
            ],
            [
                'id_paket' => 2,
                'nama_tempat_destinasi' => 'Gunung Bromo',
                'kota_destinasi' => 'Malang',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_destinasi/',
                'gambar_destinasi' => '7.jpg'
            ],
            [
                'id_paket' => 3,
                'nama_tempat_destinasi' => 'Kampung Warna Warni',
                'kota_destinasi' => 'Malang',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_destinasi/',
                'gambar_destinasi' => '8.jpg'
            ],
        ]);
    }
}
