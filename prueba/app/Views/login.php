<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
  <hr> 
  <div class="container">

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="<?php echo base_url('/login') ?>" method="POST">
                <h3>Iniciar Sesión</h3>
                <br>
                <label for="">Usuario:</label>
                <input class="form-control" type="text" id="usuario" name="usuario" Required>
                <label for=""> Contraseña:</label>
                <input class="form-control" type="password" name="password" name="password" Required>
                <br>
                
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-3"><a href="<?php echo base_url('/registro') ?>" class="btn btn-primary">Registrarse</a>
               </div>
               <div class="col-2"></div>

                  <div class="col-3">
                  <button class="btn btn-primary">Ingresar</button>
                </div>
               
                <div class="col-2">
                
                </div>
               
                </div>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
   </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>