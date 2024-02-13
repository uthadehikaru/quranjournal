<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $data['categories'] = Category::take(4)->get();
        $data['events'] = Post::take(3)
        ->whereRelation('category','slug','acara')
        ->get();
        $data['products'] = Post::take(3)
        ->whereRelation('category','slug','produk')
        ->get();
        return view('home', $data);
    }
}
