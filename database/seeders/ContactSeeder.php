<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = array(
            array('id' => '1', 'email' => 'ola', 'message' => 'que catzio'),
            array('id' => '2', 'subject' => 'ola', 'message' => 'va faaf')
        );
        DB::TABLE('comments')->insert($comments);
    }
}
