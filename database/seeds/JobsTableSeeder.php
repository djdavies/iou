<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [
        	[
        		'post_id' => 1,
        		'user_id' => 2,
        		'accepted' => 1,
        		'completed' => 1
        	],
        	[
        		'post_id' => 2,
        		'user_id' => 1,
        		'accepted' => 1,
        		'completed' => 0
        	],
        	[
        		'post_id' => 3,
        		'user_id' => 1,
        		'accepted' => 1,
        		'completed' => 0
        	],
        	[
        		'post_id' => 4,
        		'user_id' => 3,
        		'accepted' => 1,
        		'completed' => 0
        	]
        ];

        foreach ($jobs as $job) {
           Job::create($job);
        }
    }
}
