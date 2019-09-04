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
                'pertanyaan' => '<b> Kalau paket yang ada bromonya ada kah? </b>',
                'jawaban' => 'Ada, untuk pilihat paket yang ada bromonya silahkan klik disini.',
            ],
            [
                'id_paket' => 1,
                'pertanyaan' => '<b> Ini nanti transportnya pakai apa ya? </b>',
                'jawaban' => 'Untuk peseta dibawah 6 orang kami menggunakan Armada Inova dan diatas 6 orang hingga 12 orang kami menggunakan Armada Toyota Hiace.',
            ],
            [
                'id_paket' => 1,
                'pertanyaan' => '<b> Kalau upgrade hotelnya bisa juga? </b>',
                'jawaban' => 'Bisa, jika Anda ingin upgrade atau downgrade Hotel tinggal konfirmasikan kepada customer service kami.',
            ],
            [
                'id_paket' => 1,
                'pertanyaan' => '<b> Untuk harga anak bagaimana? </b>',
                'jawaban' => 'Untuk harga anak dibawah 5 tahun tidak dikenakan biaya (free), dan untuk anak usia 5 - 8 tahun dikenakan biasaya sebesar 50% dari harga dewasa.',
            ],
        ]);
    }
}
