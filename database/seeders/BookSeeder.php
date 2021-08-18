<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //USING QUERY BUILDER
        DB::TABLE('books')->insert([
            'title' => 'Mobydick'
        ]);
        DB::TABLE('books')->insert([
            'title' => 'H.P'
        ]);
    }
}
