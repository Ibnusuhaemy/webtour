<?php

use Illuminate\Database\Seeder;

class komentarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('komentar')->insert([
            [
                'id_blog' => 1,
                'nama_komentar' => 'Fareladzin Wibi',
                'komentar' => 'blablablablablablablalblalbal',
            ],
            [
                'id_blog' => 3,
                'nama_komentar' => 'Zara Zeva',
                'komentar' => 'blablablablablablablalblalbal',
            ],
            [
                'id_blog' => 2,
                'nama_komentar' => 'Raisa Andriana',
                'komentar' => 'blablablablablablablalblalbal',
            ],
            [
                'id_blog' => 2,
                'nama_komentar' => 'Fareladzin Wibi',
                'komentar' => 'blablablablablablablalblalbal',
            ],
        ]);
    }
}
