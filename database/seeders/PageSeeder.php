<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create([
            'title' => 'Profile',
            'slug' => 'profile',
        ]);
        Page::create([
            'title' => 'Member',
            'slug' => 'member',
        ]);
        Page::create([
            'title' => 'Kontribusi',
            'slug' => 'kontribusi',
        ]);
    }
}
