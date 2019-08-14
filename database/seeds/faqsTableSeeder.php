<?php

use Illuminate\Database\Seeder;

class faqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            [
                'id_paket' => 1,
                'pertanyaan' => 'asdsrgadawd',
                'jawaban' => 'gasdeasdad',
            ],
            [
                'id_paket' => 2,
                'pertanyaan' => 'gsdfasdasd',
                'jawaban' => 'sdvsfadad'
            ],
        ]);
    }
}
