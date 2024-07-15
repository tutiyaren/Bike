<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Food_PostsTableSeeder extends Seeder
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
            'area_id' => '2',
            'food_genre_id' => '3',
            'title' => 'イケメンフェイス♡',
            'content' => 'サンプルテキスト',
            'image' => 'face.jpg',
        ];
        DB::table('food_posts')->insert($param);
        $param = [
            'profile_id' => '1',
            'area_id' => '5',
            'food_genre_id' => '4',
            'title' => 'バイクと歩む人生',
            'content' => 'サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト',
            'image' => 'fuji.jpg',
        ];
        DB::table('food_posts')->insert($param);
    }
}
