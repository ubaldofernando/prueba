<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>inicio</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php echo session('usuario'); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/registro') ?>">Salir <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('/salir') ?>">Salir <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form  method="POST" action="<?php echo base_url().'registro' ?>">
            <h3>Formulario de Registro</h3>
                <br>
                <label for="">Usuario:</label>
                <input class="form-control" type="text" id="usuario" name="usuario" Required>
                <label for=""> Correo electrónico:</label>
                <input class="form-control" type="email" id="correo" name="correo" Required>
                <label for=""> Contraseña:</label>
                <input class="form-control" type="password" name="password" name="password" Required>
                <label for=""> Repetir Contraseña:</label>
                <input class="form-control" type="password" name="passwordr" name="passwordr" Required>
                <br>
                <button class="btn btn-primary">Registrarse</button>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
   </div>

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
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            <?php foreach($datos as $key): ?>
              <tr>
                <td><?php echo $key->id ?></td>
                <td><?php echo $key->usuario ?></td>
                <td><?php echo $key->correo ?></td>
                <td>
                  <a href="<?php echo base_url().'/obtener/$key->id_user' ?>" class="btn btn-warning btn-sm">Editar</a>
                </td>
                <td>
                  <a href="" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
              </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="col-1"></div>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>