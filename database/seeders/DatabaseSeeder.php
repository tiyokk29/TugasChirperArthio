<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Arthio',
            'email' => 'arthio@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}