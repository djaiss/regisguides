<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate();

        return view('posts')
            ->with('posts', $posts);
    }

    public function show(Request $request, String $slug)
    {
        $post = Post::where('slug', $slug)->first() ?? abort(404);

        return view('post')
            ->with('post', $post);
    }
}
