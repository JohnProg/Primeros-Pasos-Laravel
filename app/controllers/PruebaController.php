<?php 
/**
* 
*/
class PruebaController extends BaseController{

	public function index(){
		$usuario = 'JOhn Paul';
		$mensaje = 'Hello THere!';
		$estudiantes = Estudiante::all();
		$usuarios = array('john', 'juan', 'julio', 'jose');
		return View::make('index')
		->with('usuario',$usuario)
		->with('mensaje', $mensaje)
		->with('usuarios', $usuarios)
		->with('mensaje', $mensaje)
		->with('estudiantes', $estudiantes);
	}

	public function get_hola($hola){
		return 'Hola '.$hola;
	}

	public function get_formulario(){
		$algo = Form::open(array('url'=>'prueba/formulario', 'method'=>'post'));
		$algo.= Form::text('campo');
		$algo.= Form::submit('Enviar');
		$algo.= Form::close();

		return $algo;
	}
	
	public function post_formulario(){
		$campo = Input::get('campo');
		return 'El campo recibido es: '.$campo;
	}
}