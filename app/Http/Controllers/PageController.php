<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function blog()
    {
        // Consulta a BBDD
        $posts = Post::get();


        return view('blog', ['posts' => $posts]);
    }
    public function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
