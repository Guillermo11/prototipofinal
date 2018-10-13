<?php namespace vume\Http\Controllers;

class FormulariosController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */



	//presenta el formulario para nuevo usuario
	public function form_nuevo_usuario()
	{
		return view('formularios.form_nuevo_usuario');
	}


}
