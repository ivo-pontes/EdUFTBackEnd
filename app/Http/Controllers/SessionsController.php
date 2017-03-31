<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest' , ['except' => 'destroy']);
	}

    public function create()//Criar uma session = login
    {
    	return view('sessions/create')	;
    }

    public function destroy()
    {
    	auth()->logout();

    	return redirect()->home();
    }

    public function store()//Tentar autenticar o usuário
    {
    	if(!auth()->attempt(request(['email', 'password'])))
    	{
    		return back()->withErrors([
    			'message' => 'Please check your credentials and try again.'
    			]);
    	}else
    	{
    		return redirect()->home();
    	}
    }
}
