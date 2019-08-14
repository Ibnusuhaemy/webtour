<?php

use Illuminate\Database\Seeder;

class rencanaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rencana')->insert([
            [
                'id_paket' => 1,
                'rencana' => 'Hari 1, Check in Hotel',
                'gambar_rencana' => 'asdawd.png',
                'deskripsi' => 'Diantar Ke hotel sesuai pesanan hotel'
            ],
            [
                'id_paket' => 2,
                'rencana' => 'Hari 1, Check in Hotel',
                'gambar_rencana' => 'asdnakuwd.png',
                'deskripsi' => 'Diantar ke hotel sesuai pesanan hotel'
            ],
        ]);
    }
}
