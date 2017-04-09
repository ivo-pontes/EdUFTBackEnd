<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'valor', 'peso', 'descricao', 'categoria', 'quantidade','opinioes'
    ];


   public function __construct($produto)
  {
    $this->titulo = $produto['titulo'];
    $this->valor = $produto['valor'];
    $this->peso = $produto['peso'];
    $this->descricao = $produto['descricao'];
    $this->categoria = $produto['categoria'];
    $this->quantidade = $produto['quantidade'];
    $this->opiniao = $produto['opiniao'];
  }

}
