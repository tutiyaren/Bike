<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'profile_id' => '1',
            'food_scenery_post_id' => '1',
            'genre' => 'scenery_genre_id',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'profile_id' => '2',
            'food_scenery_post_id' => '2',
            'genre' => 'food_genre_id',
        ];
        DB::table('posts')->insert($param);
    }
}
