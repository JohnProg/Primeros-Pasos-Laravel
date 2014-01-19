<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::pattern('nombre', '[a-z]+');
Route::pattern('paginas', '[0-9]+');

Route::get('/', function()
{
	return View::make('hello');
});

// Route::get('/libros/{nombre}/{paginas}', array('before' => 'session', function($nombre, $paginas)
// {
// 	return "el libro {$nombre} tiene {$paginas} paginas.";
// }));

// Route::get('/papeles/{nombre}/{paginas}', function($nombre, $paginas)
// {
// 	return "el libro {$nombre} tiene {$paginas} paginas.";
// })->before('session');

Route::resource('usuarios', 'UsuariosController');

// Route::get('/session/crear', function(){
// 	Session::put('nombre', 'John');
// 	return 'sesion creada';
// });

// Route::get('/session/eliminar', function(){
// 	Session::forget('nombre');
// 	return 'sesion destruida';
// });

// Route::group(array('before'=>'session'), function(){
// 	Route::get('/personas/{nombre}/{paginas}', function($nombre, $paginas)
// 	{
// 		return "el libro {$nombre} tiene {$paginas} paginas.";
// 	});

// 	Route::get('/mujeres/{nombre}/{paginas}', function($nombre, $paginas)
// 	{
// 		return "el libro {$nombre} tiene {$paginas} paginas.";
// 	});
// });

// Route::get('/libros/autor', function()
// {
// 	return View::make('libros.forma');
// });

// Route::post('/libros/autor', function()
// {	
// 	$datos = Input::all();

// 	$reglas = array(
// 		'nombre' => 'required|alpha',
// 		'apellido' => 'equired|alpha',
// 		'correo' => 'equired|Email',
// 		'edad' => 'equired|Integer',
// 	);

// 	$validacion = Validator::make($datos, $reglas);

// 	if($validacion->fails()){
// 		return "esta mal";
// 	}
// 	return dd($datos);
	
// 	return Input::get('_token');
// })->before('csrf');
// Route::get('prueba', 'PruebaController@get_index');
// Route::get('prueba', 'PruebaController');
// Route::get('prueba', 'PruebaController@get_formulario');
// Route::controller('prueba', 'PruebaController');

Route::get('/', 'PruebaController@index');


Route::get('/estudiante/lista', 'EstudianteController@lista');
Route::get('/estudiante/nuevo', 'EstudianteController@get_nuevo');
Route::post('/estudiante/nuevo', 'EstudianteController@post_nuevo');


Route::get('/formulario', 'WebController@get_formulario');
Route::post('/formulario', 'WebController@post_formulario');