<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CarrinhosInterface as CarrinhosInterface;
use App\Models\Carrinhos;

class CarrinhosRepository extends Repository implements Interface
{
  /**
   * @var Model
   */
  protected $model;
 
  /**
   * Constructor
   */
  public function __construct(Carrinhos $model)
  {
    $this->model = $model;
  }

}
