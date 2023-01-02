<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory()->count(50)->create();
        User::create([
            'name'=>'farida',
            'email'=>'farida@gmail.com',
            'email_verified_at'=>now(),
            'phone_number'=>'0123456789',
            'password'=>'123123123'
            ]);
    }
}
