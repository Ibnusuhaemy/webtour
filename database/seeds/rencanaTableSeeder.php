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
                'rencana' => 'Day 1 (B, L, D)',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_rencana/',
                'gambar_rencana' => 'rencana1.jpg',
                'deskripsi' => '08.00 - 08.30 : Penjemputan Peserta di Meeting Point (Bandara/Stasiun)<br>08.30 - 10.00 : Wisata Petik Apel<br>10.00 - 13.00 : Wisata di Coban Talun<br>13.00 - 14.00 : Makan Siang di Lokal Resto<br>14.00 - 18.00 : Wisata di Jatim Park 3 (Dino Park &amp; The Legend Star)<br>18.00 - 19.00 : Makan Malam di Lokal Resto<br>19.00 - 20.00 : Wisata Alun-alun Kota Wisata Batu (Wisata Kuliner Pos Ketan Legenda)<br>21.00 : Cek in dan Istirahat'
            ],
            [
                'id_paket' => 1,
                'rencana' => 'Day 2 (B, L, D)',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_rencana/',
                'gambar_rencana' => 'rencana2.jpg',
                'deskripsi' => '08.00 - 08.30 : Makan Pagi di Lokal Resto<br>08.30 - 11.00 : Wisata Air Terjun Coban Rondo &amp; Taman Labirin<br>11.00 - 13.00 : Wisata di Omah Kayu dan Paralayang<br>13.00 - 14.00 : Makan Siang di Lokal Resto<br>14.00 - 15.30 : Wisata Rafting Half Day<br>15.30 - 17.00 : Bersih diri di Hotel<br>17.00 - 18.00 : Makan Malam di Lokal Resto<br>18.00 - 21.00 : Wisata di Batu Night Spectacular<br>22.00 : Istirahat'
            ],
            [
                'id_paket' => 1,
                'rencana' => 'Day 3 (B, L, D)',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_rencana/',
                'gambar_rencana' => 'rencana3.jpg',
                'deskripsi' => '08.00 - 08.30 : Makan Pagi di Lokal Resto<br>08.30 - 10.00 : Free Time di Hotel<br>10.00 - 13.30 : Wisata di jatimpark 3<br>13.30 - 14.30 : Makan Siang<br>14.30 - 17.30 : Wisata di Museum Angkut<br>17.30 - 18.30 : Wisata Belanja Oleh-oleh Khas Malang<br>18.30 - 19.30 : Makan Malam<br>20.00 : Istirahat'
            ],
            [
                'id_paket' => 1,
                'rencana' => 'Day 4 (B, L)',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_rencana/',
                'gambar_rencana' => 'rencana4.jpg',
                'deskripsi' => '08.00 - 09.00 : Makan Pagi sekalian Cek out Hotel<br>09.00 - 11.00 : Wisata di Coban Rais (Batu Flower Garden)<br>11.00 - 12.00 : Makan siang Kuliner Bakso Presiden<br>12.00 - 14.00 : Wisata di Kampung Warna-warni Jodipan<br>14.00 - 15.30 : Pengantaran peserta di Meeting Point dan Trip selesai.'
            ],
        ]);
    }
}
