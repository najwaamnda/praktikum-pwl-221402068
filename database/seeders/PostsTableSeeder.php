<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() :void
    {
        $users = [];
        $faker = Factory::create();
        $i;

        for ($i = 1; $i <= 5; $i++){
            $posts[] = [
                'title' => $faker -> word,
                'excerpt' => $faker -> sentence(mt_rand(10, 30)),
                'content' => $faker -> paragraph,
                'image' => $faker -> imageUrl,
                'author_id' => mt_rand (51, 60)
            ];
        }
        DB :: table ('posts') -> insert ($posts);
    }
}
