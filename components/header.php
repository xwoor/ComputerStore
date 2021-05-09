<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ComputerStore - <?php echo $current_page?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">

  </head>
  <body>

  
<!-- MENU NAVEGACION -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Computer Store</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link <?php if ($current_page=="inicio") {echo "active"; }?> dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Administrador
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="script/crearDB.php">Crear Base de datos</a>
                <a class="dropdown-item" href="script/crearTabla.php">Crear Tabla</a>
                <a class="dropdown-item" href="script/backups.php">Crear Backup</a>
                <a class="dropdown-item" href="script/ReporPDF.php">Reportes PDF</a>
            </li>


              
              <li class="nav-item">
                <a class="nav-link <?php if ($current_page=="inventario") {echo "active"; }?>" href="inventario.php">Inventario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if ($current_page=="utilidades") {echo "active"; }?>" href="utilidades.php">Utilidades</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- MENU NAVEGACION -->