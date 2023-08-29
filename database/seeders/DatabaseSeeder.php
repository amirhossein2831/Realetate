<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        //Create the Admin Agent and User for working with them
        $this->call(UserTableSeeder::class);

        //Create 20 User with random Info
        User::factory()->count(20)->create();
    }
}
