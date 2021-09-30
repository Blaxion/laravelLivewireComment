<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Admin",
                "email" => "admin@admin.com",
                "password" => bcrypt("laravel")
            ],
            [
                "name" => "Webmaster",
                "email" => "wb@wb.com",
                "password" => bcrypt("laravel")
            ],
            [
                "name" => "Member",
                "email" => "member@member.com",
                "password" => bcrypt("laravel")
            ]
        ]);
        $this->call([
            RestaurantSeeder::class,
            ReviewSeeder::class,
            PostSeeder::class
        ]);
    }
}
