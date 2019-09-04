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
                'fasilitas' => 'Transport Selama Tour 4 Hari'
            ],
            [
                'id_paket' => 1,
                'fasilitas' => 'Driver merangkap guide, BBM, parkir, dan tol'
            ],
            [
                'id_paket' => 1,
                'fasilitas' => 'Makan selama 10x sesuai jadwal'
            ],
            [
                'id_paket' => 1,
                'fasilitas' => 'Akomodasi menginap 3 Malam di hotel'
            ],
            [
                'id_paket' => 1,
                'fasilitas' => 'Tiket masuk Destinasi Wisata'
            ],
            [
                'id_paket' => 1,
                'fasilitas' => 'Snack di awal Penjemputan'
            ],
            [
                'id_paket' => 1,
                'fasilitas' => 'Air mineral selama tour'
            ],
            [
                'id_paket' => 1,
                'fasilitas' => 'Asuransi Zurich'
            ],
        ]);
    }
}
