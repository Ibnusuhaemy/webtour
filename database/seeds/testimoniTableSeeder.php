<?php

use Illuminate\Database\Seeder;

class testimoniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimoni')->insert([
            [
                'id_paket' => 1,
                'nama_testimoni' => 'Fareladzin Wibi Ramadhan',
                'kota_testimoni' => 'Jakarta',
                'testimoni' => 'asdaefsdvdrgxvaexcsfsdsfj sej fjsy  efejf sjeyfvs jef',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/foto_testimoni/',
                'foto_testimoni' => '20.jpeg'
            ],
            [
                'id_paket' => 1,
                'nama_testimoni' => 'Liwa Alex',
                'kota_testimoni' => 'Ambon',
                'testimoni' => 'asdaefsdvdrgxvaexcsfsdsfj sej fjsy  efejf sjeyfvs jef',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/foto_testimoni/',
                'foto_testimoni' => '14.jpeg'
            ],
        ]);
    }
}
