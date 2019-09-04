<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // IRÁ PROCURAR O USER ASSOCIADO AO POST
    public function autor(){
    	return $this->hasOne(\App\User::class, 'id', 'user_id');
    }
    public function fotos(){
    	return $this->hasOne(Foto::class);
	}
}
