<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(AgesTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(Profile_ImagesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(TweetsTableSeeder::class);
        $this->call(Profile_Tweet_FavoritesTableSeeder::class);
        $this->call(DaysTableSeeder::class);
        $this->call(DistancesTableSeeder::class);
        $this->call(TouringsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(Profile_Touring_FavoritesTableSeeder::class);
        $this->call(RepliesTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(Food_GenresTableSeeder::class);
        $this->call(Scenery_GenresTableSeeder::class);
        $this->call(Food_PostsTableSeeder::class);
        $this->call(Scenery_PostsTableSeeder::class);
        $this->call(Scenery_PostsTableSeeder::class);
        $this->call(Food_Another_ImagesTableSeeder::class);
        $this->call(Scenery_Another_ImagesTableSeeder::class);
    }
}
