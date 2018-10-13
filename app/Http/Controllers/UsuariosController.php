<?php namespace vume\Http\Controllers;

use Illuminate\Http\Request;
use vume\Http\Requests;
use vume\Http\Controllers\Controller;
use vume\User;
class UsuariosController extends Controller {

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


	public function index()
	{
			$usuario =User::all();
		return view('formularios.listado_usuario',compact('usuario'));
	}
  public function create()
	{
		return view('formularios.form_Usuario');
	}




	public function store(Request $request)

	{
		if ($request->hasFile('avatar')) {
			$file=$request->file('avatar');
			$name=time().$file->getClientOriginalName();
			$file->move(public_path().'/imagen/',$name);

}
	$usuario = new User;

	$usuario->nombres  =  $request["nombres"];
	$usuario->apellidos=$request["apellidos"];
	$usuario->telefono=$request["telefono"];
	$usuario->direccion=$request["direccion"];
	$usuario->email=$request["email"];
	$usuario->password=bcrypt($request["password"]);
	$usuario->avatar=$name;
  $resul= $usuario->save();

   	return redirect('formularios/create');
	}





		public function edit($id)
		{
				$usuario =User::find($id);
				return view('formularios.Editar_usuario',['usuario'=>$usuario]);	//
		}

		public function update(Request $request, $id)
		{
			$usuario =User::find($id);
			$usuario ->fill($request->except('avatar'));
			if ($request->hasFile('avatar')) {
				$file=$request->file('avatar');
				$name=time().$file->getClientOriginalName();
				$usuario->avatar=$name;
				$file->move(public_path().'/imagen/',$name);

	}
			        $usuario ->save();
							return redirect('formularios');
		}



		public function destroy($id)
		{
				$usuario =User::find($id);
			$file_path= public_path().'/imagen/'.$usuario->avatar;
			\File::delete($file_path);
			$usuario->delete();
	    return redirect('formularios');

		}
}
