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

                'first_name' => "Mwangangi",
                    'last_name' => "Nzamalu",
                    'middle_name' => "Samuel",
                    'dob' => now(),
                    'phone' => "0722436233",
                    'email' => "admin@gmail.com",
                    'role'=> 1,
                    'password' => Hash::make("password"),

            ]) ;

    }
}
