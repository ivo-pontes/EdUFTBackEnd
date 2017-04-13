<?php

namespace App\Http\Controllers;

//use App\Models\Livros;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Repositories\Interfaces\LivrosInterface as LivrosInterface;
use Illuminate\Support\Facades\Storage as Storage;
use App\Models\Livros as Livros;

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

        //dd($livros);

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
        //dd($livro);
        //$livros;
        //return \Response::json($livro);
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
        //$l = Livros::where('id', $livro->id)->with('produto')->get();
        //$l = $livro->getLivrosData();
        //$l = $livro::with('produto')->first()->get();
        //dd($livro->autores);
        
        /*foreach ($livro->produtos as $produto) 
        {
            echo $produto->titulo;
        }*/

        //$autores = Livros::where('id', $livro->id)->with('autores')->get();
        
        //dd($autores);

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
       
      // $livro->delete();
       
       return redirect()->home();
    }
}
