<?=$this->extend('Layouts/layout')?>

<?=$this->section('navadmin')?> 
<?=$this->include('Layouts/altauser')?>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-white">
    <div class="container">
    <a class="navbar-brand" href="#"><?php echo session('usuario'); ?></a>
        
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/accesos') ?>">Accesos </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/altaUsuario') ?>">Alta Usuario </a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link" href="<?php echo base_url('/salir') ?>">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?=$this->endSection()?> 

  