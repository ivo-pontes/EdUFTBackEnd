<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\AreasInterface as AreasInterface;

class AreasController extends Controller
{
    protected $area;

    public function __construct(AreasInterface $areaInterface)
    {
        $this->area = $areaInterface;
    }

    public function create()
    {
    	return view('areas/create');
    }

    public function store()
    {
    	//Validar
    	$this->validate(request(),[
    		'descricao' => 'required'
    		]);

       
        $area = $this->area->persist(request(['descricao']));
    	
    	//dd($area);

        //\Mail::to($area)->send(new Welcome($area));

    	//Redirecionar
    	return redirect()->home();
    }
}
