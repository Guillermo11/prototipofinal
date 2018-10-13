@extends('home')
@section('content')
<div class="row">
  <!-- left column -->
    <div class="col-md-8">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Formulario de Registro de Usuarios del Sistema</h3>

      </div>

      <!-- /.box-header -->
      <!-- form start -->

      {!! Form::model($usuario,['action' => ['UsuariosController@update', $usuario->id],'files' => true,'method' => 'put','class'=>'popup-form','data-toggle'=>'validator']) !!}


         @csrf
         <meta name="csrf-token" content="{{ csrf_token() }}">
          <div class="box-body">

          <div class="form-group col-sm-6">
            <label  for="exampleSelect1">Nombres</label>
            {!! Form::text('nombres', null,['class'=>'form-control','id'=>'nombres','placeholder'=>'Nombres*','required','autofocus']) !!}

          </div>
          <div class="form-group col-sm-6">
            <label  for="exampleSelect1">Apellidos</label>
            {!! Form::text('apellidos', null,['class'=>'form-control','id'=>'apellidos','placeholder'=>'Apellidos*','required','autofocus']) !!}


          </div>
            <!-- /fin fila de 12 -->

          <div class="col-md-2">
            <label  for="exampleSelect1">Telefono</label>
          {!! Form::text('telefono', null,['class'=>'form-control','id'=>'telefono','placeholder'=>'telefono*','required','autofocus']) !!}
          </div>
          <div class="form-group col-sm-5">
            <label  for="exampleSelect1">Direccion</label>
              {!! Form::text('direccion', null,['class'=>'form-control','id'=>'direccion','placeholder'=>'Direccion*','required','autofocus']) !!}
          </div>

          <div class="form-group col-sm-5">
            <label  for="exampleSelect1">Correo</label>
            {!! Form::email('email', null,['pattern'=>'.*@\w{2,}\.\w{2,}','class'=>'form-control','id'=>'email','placeholder'=>'Email*','required','autofocus']) !!}
          </div>



        <!-- /.box-body -->
           <div class="form-group col-sm-12">
            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a  href="{!! url('formularios') !!}">salir
            </a>

           </div>
           {!! Form::open(['action' => ['UsuariosController@destroy', $usuario->id],'files' => true,'method' => 'delete','class'=>'popup-form','data-toggle'=>'validator']) !!}
         {!! Form::submit('Eliminar', ['class' => 'btn btn-info pull-right']) !!}
             {!! Form::close() !!}
          </div>
         </div>
      {!! Form::close() !!}

    <!-- /.box -->
  </div>
    </div>


</div>

@stop
