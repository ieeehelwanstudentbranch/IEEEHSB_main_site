<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ArticleGuestController extends Controller
{
    public function index()
    {
        $posts =   Post::orderBy('created_at','desc')->paginate(5);
        // return PostCollection::collection($posts);
        return view('/welcome' , compact('posts'));
    }

    public function home()
    {
        $posts =   Post::orderBy('created_at','desc')->paginate(1);
        // return PostCollection::collection($posts);
        return view('/layouts/app_home_articles' , compact('posts'));
    }
    public function about()
    {
        $posts =   Post::orderBy('created_at','desc')->paginate(5);
        // return PostCollection::collection($posts);
        return view('/about' , compact('posts'));
    }
    public function events()
    {
        $posts =   Post::orderBy('created_at','desc')->paginate(5);
        // return PostCollection::collection($posts);
        return view('/events' , compact('posts'));
    }
    public function wie()
    {
        $posts =   Post::orderBy('created_at','desc')->paginate(5);
        // return PostCollection::collection($posts);
        return view('/wie' , compact('posts'));
    }

    public function ras()
    {
        $posts =   Post::orderBy('created_at','desc')->paginate(5);
        // return PostCollection::collection($posts);
        return view('/ras' , compact('posts'));
    }

    public function magazine()
    {
        $posts =   Post::orderBy('created_at','desc')->paginate(5);
        // return PostCollection::collection($posts);
        return view('/magazine' , compact('posts'));
    }
}
