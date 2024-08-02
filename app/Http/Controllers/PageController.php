<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __invoke($slug)
    {
        $data['page'] = Page::published()->where('slug',$slug)->firstOrFail();
        return view('pages.show', $data);
    }
}
