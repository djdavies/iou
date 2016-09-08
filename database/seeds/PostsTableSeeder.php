<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'content' => 'Looking for someone to mow my lawn.',
            'user_id' => 1
        ]);

        DB::table('posts')->insert([
            'content' => 'Can someone buy my weekly shopping?',
            'user_id' => 2
        ]);

        DB::table('posts')->insert([
            'content' => 'Looking for someone to set up my Wi-Fi network with WPA2 encrpytion -- 7 devices.',
            'user_id' => 3
        ]);

        DB::table('posts')->insert([
            'content' => 'I would like a back massage.',
            'user_id' => 4
        ]);
    }
}