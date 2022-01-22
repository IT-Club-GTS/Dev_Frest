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
                    "name" => env('ADMIN_SITE_NAME'),
                    "email" => env('ADMIN_SITE_EMAIL'),
                    "password" => bcrypt(env('ADMIN_SITE_PASSWORD')),
                ],
                [
                    "name" => env('USER_SITE_NAME'),
                    "email" => env('USER_SITE_EMAIL'),
                    "password" => bcrypt(env('USER_SITE_PASSWORD')),
                ]
            ]
        );
    }
}
