<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipios as Municipios;

class MunicipiosController extends Controller
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
    public function show($id)
    {
        $municipios = Municipios::where('estado', $id)->get();
        return view('municipios/show', compact('municipios'));
    }
}
