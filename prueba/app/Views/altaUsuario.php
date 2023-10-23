<?=$this->extend('Layouts/altauser')?>

<?=$this->section('altaUser')?>    
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Alta de Usuarios</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?php echo base_url().'crear' ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Usuario:</label>
                    <input class="form-control" type="text" id="usuario" name="usuario" placeholder="Usuario" Required>
                  </div>
                  <div class="form-group">
                    <label for="">Correo electrónico:</label>
                    <input type="email" class="form-control" id="correp" name="correo" placeholder="e-mail" Required> 
                  </div>
                  <div class="form-group">
                    <label for="">Contraseña:</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Contraseña">
                  </div>
                  <label for="">Rol:</label>
                    <input type="text" class="form-control" name="rol" name="rol" placeholder="rol">
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Crear Usuario</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</section>
<?=$this->endSection()?> 

            