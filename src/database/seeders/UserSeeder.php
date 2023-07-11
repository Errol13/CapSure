<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => "Alex Babineaux",
            'email' => "alexbabineaux@gmail.com",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('alexpassword'),
            'user_type' => 'Photographer',
            'avatar' => 'Alex.png',
            'contact'=> "09123456789",
            'address' => "Zone-5 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'id' => 2,
            'name' => "Leah Mondragon",
            'email' => "leah@gbox.adnu.edu.ph",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('leahpassword'),
            'user_type' => 'Customer',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'id' => 3,
            'name' => "Earl John Cruz",
            'email' => "earlcruz@gbox.adnu.edu.ph",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('earlpassword'),
            'user_type' => 'Photographer',
            'avatar' => 'earljohn.jpg',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'id' => 4,
            'name' => "Vivian Syndrome",
            'email' => "vivian@gmail.com",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('vivianpassword'),
            'user_type' => 'Studio Owner',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'id' => 5,
            'name' => "John Wick",
            'email' => "johnwick@gmail.com",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('wickpassword'),
            'user_type' => 'Studio Owner',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'id' => 6,
            'name' => "Tony Stark",
            'email' => "tony@gmail.com",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('tonypassword'),
            'user_type' => 'Studio Owner',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'id' => 7,
            'name' => "Elden Jami Cruz",
            'email' => "ejami@gmail.com",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('eldenpassword'),
            'user_type' => 'Studio Owner',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'id' => 8,
            'name' => "Ichigo Kurosaki",
            'email' => "ichinisan@gmail.com",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('ichipassword'),
            'user_type' => 'Studio Owner',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'id' => 9,
            'name' => "Daiguren Hyourinmaru",
            'email' => "dragon@gmail.com",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('daigurenpassword'),
            'user_type' => 'Photographer',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);


    }
}
