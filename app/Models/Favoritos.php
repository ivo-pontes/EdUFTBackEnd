<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favoritos extends Model
{
   use Notifiable;

    protected $fillable = ['oferta','usuario']
    
    
    protected $primaryKey = 'id';

    /*public function produtos()
    {
        return $this->hasMany('App\Models\Produtos','id'); // (Model, foreign_key, local_key)
    }*/
}
