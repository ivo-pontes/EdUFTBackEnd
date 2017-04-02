<?php

namespace App\Http\Controllers;

use App\Models\Livros;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\LivrosInterface as LivrosInterface;
use Illuminate\Support\Facades\Storage as Storage;

class LivrosController extends Controller
{
    protected $livro;

    public function __construct(LivrosInterface $livroInterface)
    {
        $this->livro = $livroInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('livros/create');
    }

    public function store(Request $request)
    {
        //Validar
        $this->validate(request(),[
            'titulo' => 'required',
            'sinopse'  => 'required',
            'anodepublicacao'  => 'date',
            'area' => 'required'
            ]);

        $path = Storage::putFile('public/images/'.$request->imageFile->hashName(), $request->file('imageFile'));

        $request->request->add(['image' => $path]);

        $date = new \DateTime($request->anodepublicacao);
        $date = $date->format('Y-m-d H:i:s');
        $request->request->add(['anopublicacao' => $date]);

        $livro = $this->livro->persist(request(['titulo', 'sinopse', 'anopublicacao','area', 'image']));
    
        session()->flash('message', "O Livro: ".$request->titulo." foi cadastrado.");


        
        //Redirecionar
        return redirect()->home();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function show(Livros $livros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function edit(Livros $livros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livros $livros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livros $livros)
    {
        //
    }
}
