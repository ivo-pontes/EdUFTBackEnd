<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');


Route::get('/logout', 'SessionsController@destroy');


Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');


//Route::get('/estados/{Estados}', 'EstadosController@show');

Route::get('/estados/{id}', 'EstadosController@show');

Route::get('/municipios/{id}', 'MunicipiosController@show');
