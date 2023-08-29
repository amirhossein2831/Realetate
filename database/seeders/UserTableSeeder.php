<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Database\Factories\ProfileFactory;
use Database\Factories\UserFactory;
use Hash;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //Create Admin
        User::insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1111'),
            'role' => 'admin',
            'status' => 'active'
        ]);

        //Create Agent
        User::insert([
            'name' => 'Agent',
            'username' => 'agent',
            'email' => 'agent@gmail.com',
            'password' => Hash::make('1111'),
            'role' => 'agent',
            'status' => 'active'
        ]);

        //Create User
        User::insert([
            'name' => 'User',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('1111'),
            'role' => 'user',
            'status' => 'active'
        ]);

        //Create 20 User with random Info
        User::factory(10)->create()->each(function ($user) {
            $user->profile()->save(Profile::factory()->make());
        });    }
}
