<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{



  public function municipios()
  {
    return $this->hasMany(Municipios::class);
  }
}
