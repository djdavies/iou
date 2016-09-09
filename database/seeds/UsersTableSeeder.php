<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Jake',
                'email' => 'jake@email.com',
                'password' => bcrypt('secret'),
                'image' => 'jake.png'
            ],
            [
                'name' => 'rachel',
                'email' => 'rachel@email.com',
                'password' => bcrypt('secret'),
                'image' => 'rachel.png'
            ],
            [
                'name' => 'pieter',
                'email' => 'pieter@email.com',
                'password' => bcrypt('secret'),
                'image' => 'pieter.png'
            ],
            [
                'name' => 'boris',
                'email' => 'boris@email.com',
                'password' => bcrypt('secret'),
                'image' => 'boris.png'
            ],
            [
                'name' => 'Ben',
                'email' => 'ben@email.com',
                'password' => bcrypt('secret'),
                'image' => 'ben.png'
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}