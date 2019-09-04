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
                'gambar_destinasi' => 'dummy.jpg'
            ],
            [
                'id_paket' => 1,
                'nama_tempat_destinasi' => 'Coban Talun',
                'kota_destinasi' => 'Batu',
                'gambar_destinasi' => 'dummy.jpg'
            ],
            [
                'id_paket' => 1,
                'nama_tempat_destinasi' => 'Dino Park (Jatimpark 3)',
                'kota_destinasi' => 'Batu',
                'gambar_destinasi' => 'dummy.jpg'
            ],
            [
                'id_paket' => 1,
                'nama_tempat_destinasi' => 'The Legend Star (Jatimpark 3)',
                'kota_destinasi' => 'Batu',
                'gambar_destinasi' => 'dummy.jpg'
            ],
            [
                'id_paket' => 1,
                'nama_tempat_destinasi' => 'Alun-alun Kota Wisata Batu',
                'kota_destinasi' => 'Batu',
                'gambar_destinasi' => 'dummy.jpg'
            ],
            [
                'id_paket' => 1,
                'nama_tempat_destinasi' => 'Pos Ketan Legenda',
                'kota_destinasi' => 'Batu',
                'gambar_destinasi' => 'dummy.jpg'
            ],
        ]);
    }
}
