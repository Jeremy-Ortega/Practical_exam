<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // show all posts
    public function viewAllPosts(User $user,Request $request){
        $posts = Post::all();
        return view('viewPosts',['posts'=>$posts]);
    }

    // show form creation post
    public function showCreateForm(){
        $users = User::all();
        return view('createPost',compact('users'));
    }
    // creating post
    public function createNewPost(Request $request){

        $validated = $request->validate([
            'title' => 'required|string|max:50',
            'body' => 'required|string|max:255',
        ]);

        Post::create($validated);

        return redirect()->route('viewPosts');
    }

    //delete post
    public function DeletePost(Post $post,Request $request){
        $post->delete();
        return redirect('/');
    }

    //update post
    public function EditPost(Post $post,Request $request){
        return view('UpdatePost',['post'=>$post]);
    }
}
