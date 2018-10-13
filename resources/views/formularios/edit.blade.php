
<div class="row">
  <!-- left column -->
    <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Formulario de Registro de Usuarios del Sistema</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="" action="/formularios" method="post" enctype="multipart/form-data">
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
            <input type="file" id="exampleInputFile">
          </div>

        <!-- /.box-body -->
           <div class="form-group col-sm-12">
            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-primary">Salir</button>
           </div>
          </div>
         </div>


    </form>
    <!-- /.box -->
  </div>
    </div>

</div>
