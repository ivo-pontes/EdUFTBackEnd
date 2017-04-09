<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ComprasInterface as ComprasInterface;
use App\Models\Compras;

class ComprasRepository extends Repository implements ComprasInterface
{
  /**
   * @var Model
   */
  protected $model;
 
  /**
   * Constructor
   */
  public function __construct(Compras $model)
  {
    $this->model = $model;
  }

}
