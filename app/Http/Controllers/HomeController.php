<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $data['banners'] = Setting::where('group','banner')->get();
        $data['video_homepage'] = Setting::where('key','video_homepage')->first();
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
