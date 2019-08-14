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
                'gambar_blog' => 'jskfawdas.jpg',
                'deskripsi' => 'Deskripsi .........',
                'featured' => 1
            ],
            [
                'id_type' => '2',
                'judul' => 'Bakpao Telo, Oleh-oleh Paling Juara dari Malang',
                'gambar_blog' => 'jskfawsadawddas.jpg',
                'deskripsi' => 'Deskripsi .........',
                'featured' => 1
            ],
            [
                'id_type' => '3',
                'judul' => 'Kuliner Malang dengan Porsi Jumbo, Bisa Makan Keroyokan',
                'gambar_blog' => 'jskfa12323wdas.jpg',
                'deskripsi' => 'Deskripsi .........',
                'featured' => 0
            ]
        ]);
    }
}
