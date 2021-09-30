<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
                "name" => "First restaurant",
                "cover" =>"rest1.jpg" 
            ],
            [
                "name" => "Second restaurant",
                "cover" =>"rest2.jpg" 
            ]
        ]);
    }
}
