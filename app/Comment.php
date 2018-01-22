<?php

namespace App;


class Comment extends Model
{
    //

    // $commnet->post
    public function post(){
        return $this->belongsTo(Post::class);
    }

}
