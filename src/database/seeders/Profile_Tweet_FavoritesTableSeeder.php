<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Profile_Tweet_FavoritesTableSeeder extends Seeder
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
            'tweet_id' => '1',
        ];
        DB::table('profile_tweet_favorites')->insert($param);
        $param = [
            'profile_id' => '1',
            'tweet_id' => '2',
        ];
        DB::table('profile_tweet_favorites')->insert($param);
        $param = [
            'profile_id' => '2',
            'tweet_id' => '2',
        ];
        DB::table('profile_tweet_favorites')->insert($param);
    }
}
