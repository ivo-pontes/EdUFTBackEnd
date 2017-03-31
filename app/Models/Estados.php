<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{ 
	protected $primaryKey = 'id';

	protected $fillable = ['id', 'descricao'];

	public function municipios()
	{
		return $this->hasMany(Municipios::class, 'id');
	}	
}
