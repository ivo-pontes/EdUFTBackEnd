<?php

namespace App\Repositories;

use App\Repositories\Interfaces\LivrosInterface as LivrosInterface;
use App\Models\Livros;

class LivrosRepository extends Repository implements LivrosInterface
{
  /**
   * @var Model
   */
  protected $model;
 
  /**
   * Constructor
   */
  public function __construct(Livros $model)
  {
    $this->model = $model;
  }

}
