<?php 
/**
* 
*/
class WebController extends BaseController{	

	public function get_formulario(){
		return View::make('formulario');
	}

	public function post_formulario(){	
		$inputs = Input::all();
		$rules = array(
			'user'=>'required|min:5|max:20',
			'email'=>'required|email|min:5|max:20',
			'password'=>'required|min:5|max:20',
			're_password'=>'required|same:password'
		);
		$messages = array(
			'required'=> 'Campo Obligatorio'
		);

		$validar = Validator::make($inputs, $rules, $messages);
		if($validar->fails()){
			return Redirect::back()->withErrors($validar);
		}
		else{
			return View::make('formulario')->with('datos', Input::all());
		}
	}
}