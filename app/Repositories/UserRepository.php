<?php

namespace App\Repositories;

use App\Repositories\Interfaces\UserInterface as UserInterface;
use App\Repositories\Repository as Repository;
use App\Models\User;
use App\Models\Pessoa;

class UserRepository extends Repository implements UserInterface
{
  /**
   * @var Model
   */
  protected $model;
 
  /**
   * Constructor
   */
  public function __construct(User $model)
  {
    $this->model = $model;
  }

  
  public function saveUser($data)
  {
    $this->pessoa()->save(new Pessoa());
  }

  public function pessoa()
  {
    $this->hasOne(Pessoa::class);
  }
}
