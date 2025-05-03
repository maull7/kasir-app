<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Kasir Admin',
            'email' => 'kasir@123.com',
            'password' => Hash::make('password123'),
            'role' => 1,
        ]);
    }
}
