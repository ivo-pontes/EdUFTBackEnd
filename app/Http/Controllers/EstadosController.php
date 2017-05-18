<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EstadosRepository as Estados;
//use App\Models\Estados as Estados;

class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show(Estados $Estados)
    public function show($id)
    {

        $estados = new Estados($id);
        $estados = $estados->getMunicipios();
        
        return \Response::json($estados);

        //return view('estados/show', compact('estados'));
    }

}
