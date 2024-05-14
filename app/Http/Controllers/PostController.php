<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest; // Importar a classe de requisição
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        sleep(1);
        $posts = Post::all();
        return inertia('Dashboard', compact('posts'));
    }
    
    public function create()
    {
        return Inertia('Create');
    }

    public function store(StorePostRequest $request) // Usar a classe de requisição para validação
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->route('dashboard')->with('message', 'Post criado com sucesso!');
    }

    public function destroy(Post $post)
    {

        $post->delete();

        return redirect()->route('dashboard')->with('message', 'Post excluído com sucesso!');
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return inertia('Edit', compact('post'));
    }

    public function update($id, StorePostRequest $request) // Usar a classe de requisição para validação
    {
        $post = Post::findOrFail($id);
        
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('dashboard')->with('message', 'Post atualizado com sucesso!');
    }
}
