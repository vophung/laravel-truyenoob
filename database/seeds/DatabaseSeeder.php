<?php

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
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DataCategoryTableSeeder::class);
        $this->call(DataAuthorTableSeeder::class);
        $this->call(StoryTableSeeder::class);
    }
}
