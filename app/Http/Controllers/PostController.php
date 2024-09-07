<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'First Post', 'description' => 'This is the first post description'],
            ['id' => 2, 'title' => 'Second Post', 'description' => 'This is the second post description'],
        ];
        return view('posts.index', compact('posts'));
    }
    public function show($id)
    {
        $post = ['id' => $id, 'title' => "Post $id", 'description' => "This is the description for post $id"];
        return view('posts.show', compact('post'));
    }
    public function create()
    {
        return view('posts.create');
    }

    public function edit($id)
    {
        $post = ['id' => $id, 'title' => "Post $id", 'description' => "This is the description for post $id"];
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request)
    {
        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }
    public function destroy($id)
    {
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}
