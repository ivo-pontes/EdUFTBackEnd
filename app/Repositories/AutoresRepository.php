<?php

namespace App\Repositories;

use App\Repositories\Interfaces\AutoresInterface as AutoresInterface;
use App\Models\Autores;

class AutoresRepository extends Repository implements Interface
{
  /**
   * @var Model
   */
  protected $model;
 
  /**
   * Constructor
   */
  public function __construct(Autores $model)
  {
    $this->model = $model;
  }

}
