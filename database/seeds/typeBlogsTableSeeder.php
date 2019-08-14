<?php

use Illuminate\Database\Seeder;

class typeBlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_blog')->insert([
            [
                'type_blog' => 'WISATA',
            ],
            [
                'type_blog' => 'OLEH-OLEH',
            ],
            [
                'type_blog' => 'KULINER'
            ]
        ]);
    }
}
