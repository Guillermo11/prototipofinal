@extends('home')
	@section('content')
		{!! Form::open(['action' => 'GeneroController@store','method'=>'post'] )!!}

 <input type="file" name="imagen" class="form-control" id="imagen">
{!! Form::submit('enviar', ['class' => 'btn btn-info pull-right']) !!}
		{!! Form::close() !!}

	@endsection
