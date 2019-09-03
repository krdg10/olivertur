<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
   public function post(){
        return $this->belongsTo(Post::class);
       //talvez seja diferente. baseado em vcc foto. qualquer coisa ver vcc entrada
    }
}
