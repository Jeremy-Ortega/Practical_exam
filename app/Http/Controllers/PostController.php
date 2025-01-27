<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // show all posts
    public function viewPosts(){
        $posts = Post::all();
        return view('viewPosts', compact('posts'));
    }

    // show form creation post
    public function showCreateForm(){
        return view('createPost');
    }
    // creating post
    public function createPost(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:50',
            'body' => 'required|string|max:255',
        ]);

        Post::create($validated);

        return redirect()->route('viewPosts');
    }
}
