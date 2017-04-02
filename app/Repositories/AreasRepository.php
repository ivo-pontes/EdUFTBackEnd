<?php

namespace App\Repositories;

use App\Repositories\Interfaces\AreasInterface as AreasInterface;
use App\Repositories\Repository as Repository;
use App\Models\Areas;

class AreasRepository extends Repository Implements AreasInterface
{
  /**
   * @var Model
   */
  protected $model;
 
  /**
   * Constructor
   */
  public function __construct(Areas $model)
  {
    $this->model = $model;
  }


}
