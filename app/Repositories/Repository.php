<?php

namespace App\Repositories;



class Repository
{

	public function getById($id)
	{
	  return $this->model->find($id);
	}


	public function all()
	{
	  return $this->model->all();
	}

	public function persist($data)
	{
		return $this->model->create($data);
	}

	public function edit()
	{
		//return $this->model->save();
	}

	public function save()
	{
		return $this->model->save();
	}


}
