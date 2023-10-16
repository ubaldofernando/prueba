<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Registro</title>
  </head>
  <body>
  <br> 
  <div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form  method="POST" action="<?php echo base_url().'/registro' ?>">
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
   <h3>Listado de Usuarios</h3>
   <div class="row">
    <div class="col-12">
        <div class="table table-responsive"></div>
        <table class="table table-hover table-bordered">
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Correo electrónico</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </table>
    </div>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>