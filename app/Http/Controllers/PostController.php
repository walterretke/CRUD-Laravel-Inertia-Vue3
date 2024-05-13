<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index () {
        sleep(1);
        $posts = Post::all();
        return inertia('Dashboard', compact('posts'));
    }
    
    public function create () {
        return Inertia('Create');
    }

    public function store(Request $request) {
        
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->route('dashboard');
    }
}
