<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@laravel.test',
            'password' => Hash::make('secret'),
            'role' => 'admin',
        ]);
        \App\Models\User::factory(10)->create(['role'=>'member']);
    }
}
