<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repositories\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    protected $posts;

    public function __construct(Posts $posts)
    {
        $this->middleware('auth')
            ->except('index', 'show');
        $this->posts = $posts;
    }

    public function index()
    {
        $posts = $this->posts->latest();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        return redirect()->home();
    }
}
