<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $data['categories'] = Category::take(3)->get();
        $data['events'] = Post::take(3)
        ->latest('published_at')
        ->whereRelation('category','slug','acara')
        ->get();
        $data['products'] = Post::take(3)
        ->latest('published_at')
        ->whereRelation('category','slug','produk')
        ->get();
        $data['articles'] = Post::take(3)
        ->latest('published_at')
        ->whereRelation('category','slug','artikel')
        ->get();
        return view('home', $data);
    }
}
