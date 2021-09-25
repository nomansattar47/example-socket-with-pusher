<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Events\PostAlreadyOpened;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts', ['posts' => $posts]);
    }
    public function edit($id)
    {
        // $post = Post::where('created_at','<',now()->subDay())->first();
        // dd($post);
        $post = Post::find($id);
        // event(new PostAlreadyOpened($id));
        // broadcast(new PostAlreadyOpened($id))->toOthers();
        return view('edit_post', ['post' => $post]);
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->post_title = $request->post_title;
        $post->content = $request->content;
        $post->save();
        return redirect()->back();
    }
    public function update(Request $request)
    {
        // dd($request);
        $post = Post::find($request->id);
        $post->post_title = $request->post_title;
        $post->content = $request->content;
        $post->save();
        return redirect()->back();
    }

}
