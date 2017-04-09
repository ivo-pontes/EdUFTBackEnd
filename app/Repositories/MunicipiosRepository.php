<?php

namespace App\Repositories;

use App\Repositories\Interfaces\MunicipiosInterface as MunicipiosInterface;
use App\Models\Municipios;

class MunicipiosRepository extends Repository implements MunicipiosInterface
{
  /**
   * @var Model
   */
  protected $model;
 
  /**
   * Constructor
   */
  public function __construct(Municipios $model)
  {
    $this->model = $model;
  }

}
