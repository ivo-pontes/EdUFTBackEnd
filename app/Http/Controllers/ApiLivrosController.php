<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\LivrosInterface as LivrosInterface;
use App\Models\Livros as Livros;
use App\Models\Areas as Areas;
use Intervention\Image\ImageManagerStatic as Image;

class ApiLivrosController extends Controller
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
        $livros = Livros::with('autores')->take(10)->get();

        foreach ($livros as $livro) 
        {
            $img = Image::make($livro->image)->resize(50,50);
            $img->encode($img->extension);
            $type = $img->extension;
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
            $livro->imagem = $base64;
        }

        return \Response::json($livros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Livros $livro)
    {
        $produto= Livros::find($livro->id)->produtos()->first();
        $area = Areas::find($livro->area)->first()->descricao;
        $img = Image::make($livro->image)->resize(300,300);
        $img->encode($img->extension);
        $type = $img->extension;
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
        $livro->imagem = $base64;

        $livrox = new \StdClass();
        $livrox->id = $livro->id;
        $livrox->titulo = $livro->titulo;
        $livrox->imagem = $livro->imagem;
        $livrox->sinopse = $livro->sinopse;
        $livrox->valor = $produto->valor;
        $livrox->descricao = $produto->descricao;
        $livrox->quantidade = $produto->quantidade;
        $livrox->peso = $produto->peso;
        $livrox->autores = $livro->autores;
        $livrox->area = $area;

        $livrox->anopublicacao = date("d/m/Y", strtotime($livro->anopublicacao));

        $livro = $livrox;

        return \Response::json(compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
