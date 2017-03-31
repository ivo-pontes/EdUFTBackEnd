<?php

namespace App\Repositories;

use App\Repositories\Interfaces\AutoresInterface as AutoresInterface;
use App\Models\Autores;

class PessoasRepository extends Repository implements PessoasInterface
{
  /**
   * @var Model
   */
  protected $model;
 
  /**
   * Constructor
   */
  public function __construct(Pessoas $model)
  {
    $this->model = $model;
  }

}
