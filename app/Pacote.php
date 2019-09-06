<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacote extends Model
{
    public function thumbnail(){
    	return $this->hasOne(Foto::class);
    }
    
    public function fotos(){
    	return $this->hasMany(Foto::class);
	}
}
