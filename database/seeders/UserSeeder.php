<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        // User::factory()->count(50)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin',
            'email_verified_at' => now(),
            'phone_number' => '0123456789',
            'password' => Hash::make('123123123')
        ]);
    }
}
