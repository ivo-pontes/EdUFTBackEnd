<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\AutoresInterface as AutoresInterface;

class AutoresController extends Controller
{
    protected $autor;

    public function __construct(AutoresInterface $autorInterface)
    {
        $this->autor = $autorInterface;
    }

    public function create()
    {
    	return view('autores/create');
    }

    public function store(Request $request)
    {
    	//Validar
    	$this->validate(request(),[
    		'nome' => 'required',
    		'sobrenome'  => 'required',
    		'descricao' => 'required'
    		]);

       
        $autor = $this->autor->persist(request(['nome','sobrenome','descricao']));
    	
    	session()->flash('message', "O Autor: ".$request->nome." ".$request->sobrenome." foi cadastrado.");
    	
    	return redirect()->home();
    }
}
