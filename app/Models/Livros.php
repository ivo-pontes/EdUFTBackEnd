<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    //



    public function autores()
    {
    	return $this->belongsToMany(Autores::class);
    }
}
