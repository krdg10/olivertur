<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
   public function post(){
        return $this->belongsTo(Post::class);
    }
}
