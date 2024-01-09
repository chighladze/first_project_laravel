<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function index()
    {
        $post = Post::find(1);
        dd($post->myFunc());
    }
}
