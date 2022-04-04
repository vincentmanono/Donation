<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();

        if ( User::where('email','admin@test.com')->count() <= 0) {
            # code...
            User::create([
                'name'=>"Administrator",
                'email'=>"rukia@test.com",
                'password'=>Hash::make("password"),
                'is_admin'=> 1
            ]) ;

        }

        User::create([
            'name'=>"Donor",
            'email'=>"donor@test.com",
            'password'=>Hash::make("password"),
            'is_admin'=> 0
        ]) ;
        // $this->call([
        //     CompanySeeder::class,
        //     ProductSeeder::class,
        //     ReceiveSeeder::class

        // ]

        // );
    }
}
