<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserInterface as UserInterface;

class RegistrationController extends Controller
{
    protected $user;

    public function __construct(UserInterface $userInterface)
    {
        $this->user = $userInterface;
    }

    public function create()
    {
    	return view('registration/create');
    }

    public function store()
    {
    	//Validar
    	$this->validate(request(),[
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'
    		]);

       
    	//Criar usuário
    	//$user = User::create(request(['name', 'email', 'password']));

        $user = $this->user->persist(request(['name', 'email', 'password']));
    	//Logar usuário
    	auth()->login($user);

        dd(auth()->user());

        //\Mail::to($user)->send(new Welcome($user));

    	//Redirecionar
    	return redirect()->home();
    }
}
