<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'writer']);
        Role::create(['name' => 'user']);
        Role::create(['name' => 'admin-edit']);
        Role::create(['name' => 'admin-delete']);
    }
}
