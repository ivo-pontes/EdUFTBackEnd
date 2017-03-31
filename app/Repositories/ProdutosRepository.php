<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ProdutosInterface as ProdutosInterface;
use App\Models\Produtos;

class ProdutosRepository extends Repository implements ProdutosInterface
{
  /**
   * @var Model
   */
  protected $model;
 
  /**
   * Constructor
   */
  public function __construct(Produtos $model)
  {
    $this->model = $model;
  }

}
