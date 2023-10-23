<?=$this->extend('Layouts/layout')?>

<?=$this->section('contenido')?>

<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Listado de Usuarios</h3>
          </div>
              <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Usuario</th>
                  <th>Correo electrónico</th>
                  <th>Rol</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody>
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
              </tbody>
              <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Usuario</th>
                  <th>Correo electrónico</th>
                  <th>Rol</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </tfoot>
            </table>
          </div>
                  <!-- /.card-body -->
        </div>
            <!-- /.card -->
      </div>
    </div>
          <!-- /.col -->
  </div>
</section>

<?=$this->endSection()?>
   
