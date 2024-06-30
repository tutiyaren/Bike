<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Profile_Touring_FavoritesTableSeeder extends Seeder
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
            'touring_id' => '1',
        ];
        DB::table('profile_touring_favorites')->insert($param);
        $param = [
            'profile_id' => '1',
            'touring_id' => '3',
        ];
        DB::table('profile_touring_favorites')->insert($param);
        $param = [
            'profile_id' => '2',
            'touring_id' => '2',
        ];
        DB::table('profile_touring_favorites')->insert($param);
    }
}
