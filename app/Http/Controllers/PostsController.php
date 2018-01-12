<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{

    public function index(){
//        $posts = Post::latest()->get();
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){

//        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){

        $this->validate(request(), [
            'title' => 'required|min:10',
            'body' => 'required'
        ]);

        Post::create(request(['title', 'body']));

        return redirect('/');
    }

}
