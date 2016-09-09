<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [ 
                'content' => 'Looking for someone to mow my lawn.',
                'user_id' => 1
            ],
            [
                'content' => 'Can someone buy my weekly shopping?',
                'user_id' => 2
            ],
            [
                'content' => 'Looking for someone to set up my Wi-Fi network with WPA2 encrpytion -- 7 devices.',
                'user_id' => 3
            ],
            [
                'content' => 'I would like a back massage.',
                'user_id' => 4
            ]
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}