<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CategoriasInterface as CategoriasInterface;
use App\Models\Categorias;

class CategoriasRepository extends Repository implements CategoriasInterface
{
  /**
   * @var Model
   */
  protected $model;
 
  /**
   * Constructor
   */
  public function __construct(Categorias $model)
  {
    $this->model = $model;
  }

}
