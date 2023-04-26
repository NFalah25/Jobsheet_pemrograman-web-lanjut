<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FatPostController extends Controller
{
    public function index()
    {
        $posts = Post::where('draft', false)
            ->orderBy('id', 'desc')
            ->paginate(5);
        return view('posts.index', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $post = Post::where([
            'slug' => $slug,
            'draft' => false,
        ])->first();
        return view('posts.show', ['post' => $post]);
    }
}
