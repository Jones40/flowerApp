<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $comments = array(
            array('id' => '1', 'subject' => 'ola', 'message' => 'que catzio', 'flower_id' => '3'),
            array('id' => '2', 'subject' => 'ola', 'message' => 'va faaf', 'flower_id' => '2')
        );
        DB::TABLE('comments')->insert($comments);
    }
}
