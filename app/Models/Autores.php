<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autores extends Model
{


    public function livros()
    {
    	return $this->belongsToMany(Livros::class);
    }
}
