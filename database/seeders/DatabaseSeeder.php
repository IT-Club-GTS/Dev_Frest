<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert(
            [
                [
                    "name" => "admin",
                    "email" => "admin@gmail.com",
                    "password" => bcrypt('admin'),
                ],
                [
                    "name" => "user",
                    "email" => "user@gmail.com",
                    "password" => bcrypt('user'),
                ]
            ]
        );
    }
}
