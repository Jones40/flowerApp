<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlowerSeeder extends Seeder
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
            'name' => 'Tulip',
            'price' => 3

        ]);
        DB::TABLE('books')->insert([
            'name' => 'Violeta',
            'price' => 4
        ]);
    }
}
