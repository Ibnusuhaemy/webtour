<?php

use Illuminate\Database\Seeder;

class paketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket')->insert([
            [
                'id_type' => 1,
                'nama_paket' => 'Paket Wisata Malang Batu',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_paket/',
                'gambar_paket' => 'jagadtour-bromo-batu-malang.jpg',
                'harga_dewasa' => 1500000,
                'harga_anak' => 1000000,
                'booked' => 5,
                'overview' => '<b>Highlight</b> <br> We will Bring you to Explore : <br><ul><li>Petik Apel</li><li>Coban Talun</liDino Park (Jatimpark 3)</li><li>The Legend Star (Jatimpark 3)</li><li>Alun-alun Kota Wisata Batu</li><li>Pos Ketan Legenda</li><li>Air Terjun Coban rondo & Taman Sesat Labirin</li><li>Omah Kayu & Paralayang</li><li>Apple Sun Learning Center</li><li>Batu Night Spectacular (BNS)</li><li>Dino Park (Jatimpark 3)</li><li>The Legend Star (Jatimpark 3)</li><li>Museum Angkut & Pasar Apung</li><li>Spot oleh-oleh Khas Kota Malang</li><li>Coban Rais (Batu Flower Garden)</li><li>Bakso Presiden</li><li>Kampung warna-warni Jodipan</li></ul>',
                'grup_size' => '20 pax',
                'lokasi' => 'Malang & Batu',
                'meet_point' => 'Stasiun Kota Baru Malang'
            ],
            [
                'id_type' => 2,
                'nama_paket' => 'Paket Wisata Bromo',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_paket/',
                'gambar_paket' => 'jagadtour-bromo-sunrise.jpg',
                'harga_dewasa' => 1250000,
                'harga_anak' => 750000,
                'booked' => 1,
                'overview' => '<b>Highlight</b> <br> We will Bring you to Explore : <br><ul><li>Petik Apel</li><li>Coban Talun</liDino Park (Jatimpark 3)</li><li>The Legend Star (Jatimpark 3)</li><li>Alun-alun Kota Wisata Batu</li><li>Pos Ketan Legenda</li><li>Air Terjun Coban rondo & Taman Sesat Labirin</li><li>Omah Kayu & Paralayang</li><li>Apple Sun Learning Center</li><li>Batu Night Spectacular (BNS)</li><li>Dino Park (Jatimpark 3)</li><li>The Legend Star (Jatimpark 3)</li><li>Museum Angkut & Pasar Apung</li><li>Spot oleh-oleh Khas Kota Malang</li><li>Coban Rais (Batu Flower Garden)</li><li>Bakso Presiden</li><li>Kampung warna-warni Jodipan</li></ul>',
                'grup_size' => '50 pax',
                'lokasi' => 'Malang',
                'meet_point' => 'Stasiun Kota Baru Malang'
            ],
            [
                'id_type' => 3  ,
                'nama_paket' => 'Paket Wisata Keliling Kota Malang',
                'url' => 'http://45.32.105.117:7094/',
                'directory' => 'uploads/gambar_paket/',
                'gambar_paket' => 'jagadtour-artikel-kampung-biru.jpg',
                'harga_dewasa' => 500000,
                'harga_anak' => 300000,
                'booked' => 20,
                'overview' => '<b>Highlight</b> <br> We will Bring you to Explore : <br><ul><li>Petik Apel</li><li>Coban Talun</liDino Park (Jatimpark 3)</li><li>The Legend Star (Jatimpark 3)</li><li>Alun-alun Kota Wisata Batu</li><li>Pos Ketan Legenda</li><li>Air Terjun Coban rondo & Taman Sesat Labirin</li><li>Omah Kayu & Paralayang</li><li>Apple Sun Learning Center</li><li>Batu Night Spectacular (BNS)</li><li>Dino Park (Jatimpark 3)</li><li>The Legend Star (Jatimpark 3)</li><li>Museum Angkut & Pasar Apung</li><li>Spot oleh-oleh Khas Kota Malang</li><li>Coban Rais (Batu Flower Garden)</li><li>Bakso Presiden</li><li>Kampung warna-warni Jodipan</li></ul>',
                'grup_size' => '5 pax',
                'lokasi' => 'Malang',
                'meet_point' => 'Stasiun Kota Baru Malang'
            ],
        ]);

    }
}
