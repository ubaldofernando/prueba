<?=$this->extend('Layouts/layout')?>

<?=$this->section('contenido')?>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php echo session('usuario'); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">  
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('/accesos') ?>">Accesos <span class="sr-only">(current)</span></a>
      </li>  
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('/salir') ?>">Salir <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
  </div>
</nav>


  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <form  method="POST" action="<?php echo base_url().'crear' ?>">
        <h3>Alta de Usuarios</h3>
            <br>
            <div class="row">
    <div class="col-4">
        <label for="">Usuario:</label>
        <input class="form-control" type="text" id="usuario" name="usuario" Required>
    </div>
    <div class="col-1"></div>
    <div class="col-4">
        <label for=""> Correo electrónico:</label>
            <input class="form-control" type="email" id="correo" name="correo" Required>
    </div>
  </div>
  <br>
  <div class="row">
      <div class="col-4">
          <label for=""> Contraseña:</label>                
          <input class="form-control" type="text" name="password" name="password" Required>
      </div>
      <div class="col-1"></div>
      <div class="col-4">
          <label for=""> Rol:</label>
          <input class="form-control" type="text" name="rol" name="rol" Required>
      </div>
  </div>
  <br>
  <button class="btn btn-primary">Crear Usuario</button>
                
  </form>
        </div>
        <div class="col-2"></div>
    </div>
    <br>
<hr>
<hr>
   <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
    <h3>Listado de Usuarios</h3>
    <hr>
        <div class="table table-responsive"></div>
        <table class="table table-hover table-bordered">
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Correo electrónico</th>
                <th>Rol</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            <?php foreach($datos as $key): ?>
              <tr>
                <td><?php echo $key->id ?></td>
                <td><?php echo $key->usuario ?></td>
                <td><?php echo $key->correo ?></td>
                <td><?php echo $key->tipo ?></td>
                <td>
                <a href="<?= base_url('obtenerUser/') . $key->id ?>" class="btn btn-warning btn-sm">Editar</a>
                </td>
                <td>
                  <a href="<?php echo base_url('eliminar/') . $key->id ?>" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
              </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="col-1"></div>
   </div>
<?=$this->endSection()?>
   