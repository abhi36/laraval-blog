<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    //

//    public function create(){
//        Comments::create
//    }

    public function store(Post $post){

        $this->validate(request(), [
            'body' => 'required|min:5'
        ]);

        $post->addComment(request('body'));

        return redirect('/posts/'. request('post_id') );
    }
}
