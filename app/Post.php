<?php

namespace App;

use App\Comment;

class Post extends Model
{

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function addComment($body){

        $this->comments()->create(compact('body'));

//        Comment::create([
//            'post_id' => $this->id,
//            'body' => $comment['body']
//        ]);
    }
}
