<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{

    /**
     * Show the application dashboard.
     */
    public function index(Request $request): View
    {
        $posts = Post::posted()->paginate(20);

        return view('blog.index', compact('posts'));
    }


    public function show(string $slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        SEOMeta::setTitle($post->title);
        SEOMeta::setDescription($post->short_description);

        return view('blog.view', compact('post'));
    }
}
