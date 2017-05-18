<?php

namespace App\Http\Controllers;

//use App\Models\Livros;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Repositories\Interfaces\LivrosInterface as LivrosInterface;
use Illuminate\Support\Facades\Storage as Storage;
use App\Models\Livros as Livros;
use Intervention\Image\ImageManagerStatic as Image;

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
        $livros = Livros::with('autores')->take(10)->get();

        foreach ($livros as $livro) 
        {
            $img = Image::make($livro->image)->resize(50,50);
            $img->encode($img->extension);
            $type = $img->extension;
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
            $livro->imagem = $base64;
        }

        return view('livros/index',compact('livros'));;
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
            'area' => 'required',
            'descricao' => 'required',
            'peso'  => 'required|numeric',
            'valor'  => 'required|numeric',
            'quantidade'  => 'required|numeric',
            ]);

       $destination = 'uploads/';

       $image = $request->imageFile;

        // ex: photo-5396e3816cc3d.jpg
        $filename = Str::lower(
            pathinfo(str_replace(' ', '_', $image->getClientOriginalName()), PATHINFO_FILENAME)
            .'-'.uniqid().'.'.$image->getClientOriginalExtension()
        );

        $image->move($destination, $filename);
        
        $path = $destination.$filename;

        $request->request->add(['image' => $path]);

        $date = new \DateTime($request->anodepublicacao);
        $date = $date->format('Y-m-d H:i:s');
        $request->request->add(['anopublicacao' => $date]);

        $livro = $this->livro->persistProduto(request(['titulo', 'sinopse', 'anopublicacao','area', 'image',
                    'descricao','categoria', 'peso', 'valor', 'quantidade', 'autor']));

        session()->flash('message', "O Livro: ".$request->titulo." foi cadastrado.");

        return redirect()->home();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function show(Livros $livro)
    {   
        return view('livros/show',compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function edit(Livros $livro)
    {   
        return view('livros/edit',compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livros $livro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livros $livro)
    {
       session()->flash('message', "O Livro: ".$livro->titulo." foi removido.");
       
       return redirect()->home();
    }
}
