<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name','admin')->first();
        $writerRole = Role::where('name','writer')->first();
        $userRole = Role::where('name','user')->first();
        $admineditRole = Role::where('name','admin-edit')->first();
        $admindeleteRole = Role::where('name','admin-delete')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456aA')
        ]);

        $adminedit = User::create([
            'name' => 'Admin Edit User',
            'email' => 'adminedit@gmail.com',
            'password' => Hash::make('123456aA')
        ]);

        $admindelete = User::create([
            'name' => 'Admin Delete User',
            'email' => 'admindelete@gmail.com',
            'password' => Hash::make('123456aA')
        ]);

        $writer = User::create([
            'name' => 'Writer User',
            'email' => 'writer@gmail.com',
            'password' => Hash::make('123456aA')
        ]);

        $user = User::create([
            'name' => 'User Normal',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123456aA')
        ]);

        $admin->roles()->attach($adminRole);
        $admin->roles()->attach($admineditRole);
        $admin->roles()->attach($admindeleteRole);
        $adminedit->roles()->attach($admineditRole);
        $adminedit->roles()->attach($adminRole);
        $admindelete->roles()->attach($admindeleteRole);
        $admindelete->roles()->attach($adminRole);
        $writer->roles()->attach($writerRole);
        $user->roles()->attach($userRole);
    }
}
