<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{

    /**
     * Show the application dashboard.
     */
    public function index(Request $request): View
    {
        $posts = Post::posted()->paginate(20);

        return view('posts.index', compact('posts'));
    }


    public function show(string $slug): View
    {
        $news = Post::where('slug', $slug)->firstOrFail();

        SEOMeta::setTitle($news->seo_title);
        SEOMeta::setDescription($news->seo_description);

        return view('posts.view', compact('news'));
    }
}
