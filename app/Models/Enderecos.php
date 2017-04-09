<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
   use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cep', 'rua', 'numero', 'bairro'
    ];

  public function municipios()
  {
    return $this->hasMany(Municipios::class);
  }
}
