<?php

use Illuminate\Database\Seeder;

class galeriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeri')->insert([
            [
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_galeri/',
                'gambar_galeri' => '1.jpeg'
            ],
            [
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_galeri/',
                'gambar_galeri' => '2.jpeg'
            ],
            [
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_galeri/',
                'gambar_galeri' => '3.jpeg'
            ],
            [
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_galeri/',
                'gambar_galeri' => '4.jpeg'
            ],
            [
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_galeri/',
                'gambar_galeri' => '5.jpeg'
            ],
        ]);
    }
}
