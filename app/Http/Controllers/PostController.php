<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function compact;
use function view;

class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $post = new Post;
        $post->title = $validatedData['title'];
        $post->description = $validatedData['description'];
        $post->save();
        session()->flash('message', 'Post created successfully.');
        return redirect()->route("home");
    }
    public function index()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }
    public function edit(Post $post)
    {
        return view('edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();

        return redirect()->route('home');
    }
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('home');
    }
}
