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
        'titulo', 'image','area', 'sinopse','anopublicacao'
    ];

    public function autores()
    {
    	return $this->belongsToMany(Autores::class,'id');
    }
}


//App\Models\Livros::with('autores')->all();
//$livro->autores()->attach($autor);