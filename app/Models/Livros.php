<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
   use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'image','area', 'sinopse','anopublicacao', 'produto'
    ];

    protected $primaryKey = 'id';
    
    public function autores()
    {
    	return $this->belongsToMany('App\Models\Autores');
    }
}


//App\Models\Livros::with('autores')->all();
//$livro->autores()->attach($autor);