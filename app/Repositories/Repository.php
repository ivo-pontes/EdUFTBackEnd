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

	
	/*protected $modelClassName;

	public function create(array $attributes)
	{
		return call_user_func_array("{$this->modelClassName}::create", array($attributes));
	}
	public function all($columns = array('*'))
	{
		return call_user_func_array("{$this->modelClassName}::all", array($columns));
	}
	public function find($id, $columns = array('*'))
	{
		return call_user_func_array("{$this->modelClassName}::find", array($id, $columns));
	}
	
	public function destroy($ids)
	{
		return call_user_func_array("{$this->modelClassName}::destroy", array($ids));
	}*/

}
