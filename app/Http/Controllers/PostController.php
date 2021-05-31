<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    //

    public function store(Request $request){
        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return back();
    }
    public function show($postId){
        $post = Post::findOrFail($postId);
        return view('posts.show', compact('post'));
    }
    
    public function edit($postId){
        $post = Post::findOrFail($postId);
        return view('posts.edit', compact('post'));
    }
    public function update($postId, Request $request){
       Post::findOrFail($postId)->update($request->all());
       return back();
    }
}
