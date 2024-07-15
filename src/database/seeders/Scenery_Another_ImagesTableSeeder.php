<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Scenery_Another_ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'scenery_post_id' => '1',
            'image' => '',
        ];
        DB::table('scenery_another_images')->insert($param);
    }
}
