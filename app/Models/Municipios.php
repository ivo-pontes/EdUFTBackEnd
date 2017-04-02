<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
   use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descricao', 'estado', 'codigo'
    ];


    public function estados()
    {
    	return $this->belongsTo('App\Models\Estados', 'id');	
    }
}
