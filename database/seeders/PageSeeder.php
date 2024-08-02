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
            'is_published' => true,
        ]);
        Page::create([
            'title' => 'Member',
            'slug' => 'member',
            'is_published' => true,
        ]);
        Page::create([
            'title' => 'Kontribusi',
            'slug' => 'kontribusi',
            'is_published' => true,
        ]);
    }
}
