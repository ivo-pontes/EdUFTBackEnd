<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Autores extends Model
{
    use Notifiable;
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'sobrenome', 'descricao'
    ];

    

    public function livros()
    {
    	return $this->belongsToMany('App\Models\Livros');
    }

}
