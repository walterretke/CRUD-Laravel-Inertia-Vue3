<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index () {
        sleep(2);
        $posts = Post::all();
        return inertia('Home', compact('posts'));
    }
}
