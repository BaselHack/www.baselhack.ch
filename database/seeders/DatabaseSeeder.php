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
        // Administration
        $this->call(PagesTableSeeder::class);
        $this->call(ChannelsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
