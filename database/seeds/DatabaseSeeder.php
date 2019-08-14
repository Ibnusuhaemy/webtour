<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            typePaketTableSeeder::class,
            paketTableSeeder::class,
            destinasiTableSeeder::class,
            fasilitasTableSeeder::class,
            testimoniTableSeeder::class,
            hotelTableSeeder::class,
            durasiTableSeeder::class,
            rencanaTableSeeder::class,
            faqsTableSeeder::class,
            typeBlogsTableSeeder::class,
            blogsTableSeeder::class,
            komentarsTableSeeder::class
        ]);
    }
}
