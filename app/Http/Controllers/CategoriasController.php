<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\CategoriasInterface as CategoriasInterface;

class CategoriasController extends Controller
{
    protected $categoria;

    public function __construct(CategoriasInterface $categoriaInterface)
    {
        $this->categoria = $categoriaInterface;
    }

    public function create()
    {
    	return view('categorias/create');
    }

    public function store()
    {
    	//Validar
    	$this->validate(request(),[
    		'descricao' => 'required'
    		]);

       
        $categoria = $this->categoria->persist(request(['descricao']));
    	
    	//dd($categoria);
    	
    	//Redirecionar
    	return redirect()->home();
    }
}
