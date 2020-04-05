<?php

namespace App\Http\Controllers;

use App\Helpers\TagsHelper;
use App\Models\Portfolio;
use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Tags\Tag;

class HomeController extends Controller
{
    public function index(Request $request): View
    {
        SEOMeta::setTitle('Full Stack Web Developer');
        SEOMeta::setDescription('Working with PHP frameworks (Laravel, Yii), SQL (MySQL, PostgreSQL), MongoDB, JQuery, Bootstrap, Flexbox, HTML5, Git, Docker.');

        $portfolio = Portfolio::all();
        $tags = TagsHelper::getTags($portfolio);
        $posts = Post::posted()->paginate(6);

        return view('home', compact('portfolio', 'tags', 'posts'));
    }
}
