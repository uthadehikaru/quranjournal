<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $index = 0;
        foreach(Category::all() as $category){
            $thumbnail ='thumbnails/'.$category->slug.'.jpg';
            copy(public_path('assets/'.$category->slug.'.jpg'), storage_path('app/public/'.$thumbnail));
            $data['thumbnail'] = $thumbnail;
            Post::factory(20)->for($category)->create($data);
        }
    }
}
