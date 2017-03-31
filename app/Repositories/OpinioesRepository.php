<?php

namespace App\Repositories;

use App\Repositories\Interfaces\OpinioesInterface as OpinioesInterface;
use App\Models\Opinioes;

class OpinioesRepository extends Repository implements OpinioesInterface
{
  /**
   * @var Model
   */
  protected $model;
 
  /**
   * Constructor
   */
  public function __construct(Opinioes $model)
  {
    $this->model = $model;
  }

}
