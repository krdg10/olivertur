<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
   protected $fillable = ['post_id', 'url', 'nome', 'pacote_id'];

   public function post(){
        return $this->belongsTo(Post::class);
       //talvez seja diferente. baseado em vcc foto. qualquer coisa ver vcc entrada
    }
   public function pacote(){
      return $this->belongsTo(Pacote::class);
     //talvez seja diferente. baseado em vcc foto. qualquer coisa ver vcc entrada
   }   
}
