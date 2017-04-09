<?php

namespace App\Repositories;

use App\Repositories\Interfaces\EnderecosInterface as EnderecosInterface;
use App\Models\Enderecos;

class EnderecosRepository extends Repository implements EnderecosInterface
{
  /**
   * @var Model
   */
  protected $model;
 
  /**
   * Constructor
   */
  public function __construct(Enderecos $model)
  {
    $this->model = $model;
  }

}
