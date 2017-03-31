<?php

namespace App\Repositories;

use App\Repositories\Interfaces\EstadosInterface as EstadosInterface;
use App\Models\Estados as Estados;
use App\Models\Regioes;
use App\Models\Municipios;

class EstadosRepository extends Repository implements EstadosInterface
{

	public $model;
	
	public function __construct($id)
	{
		$this->model = Estados::find($id);
	}




	public function getNome()
	{
		return $this->model->descricao;
	}

	public function getMunicipios()
	{
		$descricoes = Municipios::where('estado', $this->model->id)->pluck('descricao');
		$ids = Municipios::where('estado', $this->model->id)->pluck('id');
		$i = 0;

		foreach ($ids as $id) 
		{
			$data[$i]['id'] = $id;
			$i++;	
		}

		$i = 0;

		foreach( $descricoes as $desc)
		{
			$data[$i]['descricao'] = $desc;
			$i++;
		}


		return compact('data');
	}
}
