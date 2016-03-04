<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post; // <---- NIET VERGETEN!

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        return view('blog.index', compact('posts'));
    }

    public function show( $id )
    {
        $post = Post::findOrFail($id);
        return view('blog.show', compact('post'));
    }
}