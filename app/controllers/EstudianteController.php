<?php 
/**
* 
*/
class EstudianteController extends BaseController{	

	public function get_nuevo(){
		return View::make('estudiantes.nuevo');
	}

	public function post_nuevo(){
		$estudiante = new Estudiante;

		$estudiante->nombre = Input::get('nombre');
		$estudiante->edad = Input::get('edad');
		$estudiante->correo = Input::get('correo');

		$estudiante->save();

		return Redirect::to('/estudiante/lista');		
	}

	public function lista(){
		$estudiantes = Estudiante::all();
		return  View::make('estudiantes.lista')->with('estudiantes', $estudiantes);
	}
}