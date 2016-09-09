<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$tags = [
		    [ 
		    	'name' => 'gardening', 'post_id' => 1 
		    ],
		    [ 
		    	'name' => 'shopping', 'post_id' => 2 
		    ],
		    [ 
		    	'name' => 'computing', 'post_id' => 3 
		    ],
		    [ 
		    	'name' => 'computing', 'post_id' => 4 
		    ]
		];

		foreach ($tags as $tag) {
		   Tag::create($tag);
		}
	}
}