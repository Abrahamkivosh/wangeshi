<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            // User::factory(3)->create();
            Event::factory(10)->create();
            User::create([

                'first_name' => "Admin",
                    'last_name' => "Peter",
                    'middle_name' => "kamau",
                    'dob' => now(),
                    'phone' => "0725632145",
                    'email' => "admin@test.com",
                    'role'=> 1,
                    'password' => Hash::make("password"),

            ]) ;

    }
}
