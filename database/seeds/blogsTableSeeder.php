<?php

use Illuminate\Database\Seeder;

class blogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            [
                'id_type' => '1',
                'judul' => 'Tempat Outbond di Malang untuk Have Fun Bareng Sahabat',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_blog/',
                'gambar_blog' => '1.jpg',
                'deskripsi' => 'Deskripsi .........',
                'featured' => 1
            ],
            [
                'id_type' => '2',
                'judul' => 'Bakpao Telo, Oleh-oleh Paling Juara dari Malang',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_blog/',
                'gambar_blog' => '2.jpg',
                'deskripsi' => 'Deskripsi .........',
                'featured' => 1
            ],
            [
                'id_type' => '3',
                'judul' => 'Kuliner Malang dengan Porsi Jumbo, Bisa Makan Keroyokan',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_blog/',
                'gambar_blog' => '3.jpg',
                'deskripsi' => 'Deskripsi .........',
                'featured' => 0
            ],
            [
                'id_type' => '1',
                'judul' => 'Destinasi Untuk Pecinta Touring Di Malang',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_blog/',
                'gambar_blog' => '4.jpg',
                'deskripsi' => 'Deskripsi .........',
                'featured' => 1
            ],
            [
                'id_type' => '1',
                'judul' => 'Wisata Ke Hutan Pinus Malang',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_blog/',
                'gambar_blog' => '5.jpg',
                'deskripsi' => 'Deskripsi .........',
                'featured' => 1
            ],
            [
                'id_type' => '1',
                'judul' => 'Taman Hiburan Di Malang',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_blog/',
                'gambar_blog' => '6.jpg',
                'deskripsi' => 'Deskripsi .........',
                'featured' => 1
            ],
        ]);
    }
}
