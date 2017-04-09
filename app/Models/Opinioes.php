<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Opinioes extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'opiniao','qualificacao'
    ];

   public function __construct($opiniao, $qualificacao)
  {
    $this->opiniao = $opiniao;
    $this->qualificacao = $qualificacao;
  }
}
