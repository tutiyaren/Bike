<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
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
            'touring_id' => '2',
            'comment' => 'サンプルテキスト？',
        ];
        DB::table('comments')->insert($param);
        $param = [
            'profile_id' => '2',
            'touring_id' => '2',
            'comment' => 'サンプルテキスト??',
        ];
        DB::table('comments')->insert($param);
        $param = [
            'profile_id' => '1',
            'touring_id' => '1',
            'comment' => 'サンプルテキスト？??',
        ];
        DB::table('comments')->insert($param);
    }
}
