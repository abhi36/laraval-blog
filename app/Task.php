<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

//    public static function incomplete(){
    public function scopeIncomplete($query){ // Task::incomplete
//        return self::where('completed', 0)->get();
        return $query->where('completed', 0);
    }

}
