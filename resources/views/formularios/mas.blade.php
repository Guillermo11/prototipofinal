<div class="box box-primary col-xs-12">

                <div class="box-header">
                  <h3 class="box-title">Nuevo Usuario del Sistema</h3>
                </div><!-- /.box-header -->

<div id="notificacion_resul_fanu"></div>



<form  id="f_nuevo_usuario"  method="post"  action="/formularios" class="form-horizontal form_entrada" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <meta name="csrf-token" content="{{ csrf_token() }}">
   <div class="box-body">

   <div class="col-md-2">
     <label  for="exampleSelect1">Fecha Actual</label>
     <input type="date" class="form-control" id="fecha_actual" name="fecha_actual" required>

   </div>
   <div class="form-group col-sm-5">
     <label  for="exampleSelect1">Nombres</label>
     <input type="text" class="form-control" id="nombres"name="nombres" required placeholder="Nombres*">

   </div>
   <div class="form-group col-sm-5">
     <label  for="exampleSelect1">Apellidos</label>
     <input type="text" class="form-control" id="apellidos" name="apellidos" required placeholder="Apellidos*">

   </div>
     <!-- /fin fila de 12 -->

   <div class="col-md-2">
     <label  for="exampleSelect1">Telefono</label>
     <input type="text" class="form-control" id="telefono" name="telefono" required placeholder="telefono*">

   </div>
   <div class="form-group col-sm-5">
     <label  for="exampleSelect1">Direccion</label>
     <input type="text" class="form-control" id="direccion"name="direccion" required placeholder="Direccion*">

   </div>
   <div class="form-group col-sm-5">
     <label  for="exampleSelect1">Correo</label>
     <input type="email" class="form-control" pattern='.*@\w{2,}\.\w{2,}', id="direccion"name="direccion" required placeholder="Email*">

   </div>

   <!-- /fin fila de 12 -->

   <div class="form-group col-sm-5">
     <label  for="exampleSelect1">Contraseña</label>
     <input type="text" class="form-control" id="password" name="password" required placeholder="Password*">

   </div>
 <div class="form-group col-sm-5">
   <label  for="exampleSelect1">Verificar Contraseña</label>
   <input type="text" class="form-control" id="VerificarPass" name="VerificarPass" required placeholder="Verificar Password*">

 </div>
 <!-- /fin fila de 12 -->
   <div class="form-group col-sm-12">
     <label  for="exampleSelect1">Subir Fotografia</label>
     <input name="avatar" type="file" id="avatar">
   </div>




<div class="box-footer col-xs-12 ">
                    <button type="submit" class="btn btn-primary">Guardar</button>
</div>


</form>

</div>
