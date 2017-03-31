<?php

namespace App\Repositories;

use App\Repositories\Interfaces\StatusComprasInterface as StatusComprasInterface;
use App\Models\StatusCompras;

class StatusComprasRepository extends Repository implements StatusComprasInterface
{
  /**
   * @var Model
   */
  protected $model;
 
  /**
   * Constructor
   */
  public function __construct(StatusCompras $model)
  {
    $this->model = $model;
  }

}
