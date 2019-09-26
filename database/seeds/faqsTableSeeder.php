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
                'pertanyaan' => ' Kalau paket yang ada bromonya ada kah? ',
                'jawaban' => 'Ada, untuk pilihat paket yang ada bromonya silahkan klik disini.',
            ],
            [
                'id_paket' => 1,
                'pertanyaan' => ' Ini nanti transportnya pakai apa ya? ',
                'jawaban' => 'Untuk peseta dibawah 6 orang kami menggunakan Armada Inova dan diatas 6 orang hingga 12 orang kami menggunakan Armada Toyota Hiace.',
            ],
            [
                'id_paket' => 1,
                'pertanyaan' => ' Kalau upgrade hotelnya bisa juga? ',
                'jawaban' => 'Bisa, jika Anda ingin upgrade atau downgrade Hotel tinggal konfirmasikan kepada customer service kami.',
            ],
            [
                'id_paket' => 1,
                'pertanyaan' => ' Untuk harga anak bagaimana? ',
                'jawaban' => 'Untuk harga anak dibawah 5 tahun tidak dikenakan biaya (free), dan untuk anak usia 5 - 8 tahun dikenakan biasaya sebesar 50% dari harga dewasa.',
            ],
            [
                'id_paket' => 2,
                'pertanyaan' => ' Ini nanti transportnya pakai apa ya? ',
                'jawaban' => 'Untuk peseta dibawah 6 orang kami menggunakan Armada Inova dan diatas 6 orang hingga 12 orang kami menggunakan Armada Toyota Hiace.',
            ],
            [
                'id_paket' => 2,
                'pertanyaan' => ' Untuk harga anak bagaimana? ',
                'jawaban' => 'Untuk harga anak dibawah 5 tahun tidak dikenakan biaya (free), dan untuk anak usia 5 - 8 tahun dikenakan biasaya sebesar 50% dari harga dewasa.',
            ],
            [
                'id_paket' => 3,
                'pertanyaan' => ' Untuk harga anak bagaimana? ',
                'jawaban' => 'Untuk harga anak dibawah 5 tahun tidak dikenakan biaya (free), dan untuk anak usia 5 - 8 tahun dikenakan biasaya sebesar 50% dari harga dewasa.',
            ],
            [
                'id_paket' => 4,
                'pertanyaan' => ' Untuk harga anak bagaimana? ',
                'jawaban' => 'Untuk harga anak dibawah 5 tahun tidak dikenakan biaya (free), dan untuk anak usia 5 - 8 tahun dikenakan biasaya sebesar 50% dari harga dewasa.',
            ],
            [
                'id_paket' => 4,
                'pertanyaan' => ' Ini nanti transportnya pakai apa ya? ',
                'jawaban' => 'Untuk peseta dibawah 6 orang kami menggunakan Armada Inova dan diatas 6 orang hingga 12 orang kami menggunakan Armada Toyota Hiace.',
            ],
        ]);
    }
}
