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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['prefix' => 'api'], function()
{
	Route::group(['prefix' => 'livros'], function()
	{
		Route::get('','ApiLivrosController@index');		
		Route::get('{livro}', 'ApiLivrosController@show');
		Route::post('', 'LivrosController@store');
		Route::put('{livro}', 'LivrosController@update');
		Route::delete('{livro}', 'LivrosController@destroy');
	});

	Route::group(['prefix' => 'autores'], function()
	{
		Route::get('','ApiLivrosController@index');		
		Route::get('{autor}', 'ApiAutoresController@show');
		Route::post('', 'LivrosController@store');
		Route::put('{livro}', 'LivrosController@update');
		Route::delete('{livro}', 'LivrosController@destroy');
	});

	Route::get('favoritos/{id}/user/{user}','ApiFavoritosController@addFav');

});
Route::get('/', 'HomeController@index')->name('home');


Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');


Route::get('/logout', 'SessionsController@destroy');


Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');


//Route::get('/estados/{Estados}', 'EstadosController@show');

Route::get('/estados/{id}', 'EstadosController@show');

Route::get('/municipios/{id}', 'MunicipiosController@show');

Route::get('/livros/create', 'LivrosController@create');

Route::post('/livros/create', 'LivrosController@store');

Route::get('/areas/create', 'AreasController@create');

Route::post('/areas/create', 'AreasController@store');

Route::get('/opinioes/create', 'OpinioesController@create');

Route::post('/opinioes/create', 'OpinioesController@store');


Route::get('/categorias/create', 'CategoriasController@create');

Route::post('/categorias/create', 'CategoriasController@store');

Route::get('/autores/create', 'AutoresController@create');

Route::post('/autores/create', 'AutoresController@store');


Route::get('/livros/{livro}', 'LivrosController@show');
Route::get('/livros', 'LivrosController@index');

Route::get('/livros/{livro}/edit', 'LivrosController@edit');

Route::delete('/livros/{livro}', 'LivrosController@destroy');