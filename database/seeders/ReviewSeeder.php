<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                "title" => "Admin",
                "content" => "Admin admin admin admin admin",
                "score" => 5,
                "user_id" => 1,
                "restaurant_id" =>1 
            ],
            [
                "title" => "Webmaster",
                "content" => "Webmaster Webmaster Webmaster Webmaster Webmaster",
                "score" => 3,
                "user_id" => 2,
                "restaurant_id" =>1 
            ],
            [
                "title" => "Member",
                "content" => "Member Member Member Member Member",
                "score" => 1,
                "user_id" => 3,
                "restaurant_id" =>1 
            ],
            [
                "title" => "Admin",
                "content" => "Admin admin admin admin admin",
                "score" => 5,
                "user_id" => 1,
                "restaurant_id" =>2 
            ],
            [
                "title" => "Webmaster",
                "content" => "Webmaster Webmaster Webmaster Webmaster Webmaster",
                "score" => 3,
                "user_id" => 2,
                "restaurant_id" =>2 
            ],
            [
                "title" => "Member",
                "content" => "Member Member Member Member Member",
                "score" => 1,
                "user_id" => 3,
                "restaurant_id" =>2
            ]
        ]);
    }
}
