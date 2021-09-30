<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('posts')->insert([
            [
                "content" => "Admin admin admin admin admin r1",
                "user_id" => 1,
                "review_id" =>1 
            ],
            [
                "content" => "Webmaster Webmaster Webmaster Webmaster Webmaster r1",
                "user_id" => 1,
                "review_id" =>1 
            ],
            [
                "content" => "Member Member Member Member Member r1",
                "user_id" => 1,
                "review_id" =>1 
            ],
            [
                "content" => "Admin admin admin admin admin r2",
                "user_id" => 1,
                "review_id" =>2 
            ],
            [
                "content" => "Webmaster Webmaster Webmaster Webmaster Webmaster r2",
                "user_id" => 1,
                "review_id" =>2 
            ],
            [
                "content" => "Member Member Member Member Member r2",
                "user_id" => 1,
                "review_id" =>2
            ],
        ]);
        
    }
}
