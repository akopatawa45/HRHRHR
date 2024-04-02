<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Rafael',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('password'),
        //     'email_verified_at' => now(),
        // ])->assignRole('admin');

        User::find(2)->assignRole(['admin', 'employee']);
    }
}
