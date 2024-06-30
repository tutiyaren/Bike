<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetsTableSeeder extends Seeder
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
            'tweet' => 'サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル'
        ];
        DB::table('tweets')->insert($param);
        $param = [
            'profile_id' => '2',
            'tweet' => 'テキストテキストテキストテキストテキストテキストテキスト',
        ];
        DB::table('tweets')->insert($param);
        $param = [
            'profile_id' => '1',
            'tweet' => 'テキスト',
        ];
        DB::table('tweets')->insert($param);
    }
}
