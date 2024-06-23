<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => '1',
            'gender_id' => '1',
            'age_id' => '3',
            'nickname' => 'AAA',
        ];
        DB::table('profiles')->insert($param);
        $param = [
            'user_id' => '2',
            'gender_id' => '2',
            'age_id' => '2',
            'nickname' => 'BBB',
        ];
        DB::table('profiles')->insert($param);
    }
}
