<?php 
$url_base ="http://localhost/app/";

 ?>


<!doctype html>
<html lang="en">
    <head>
        <title>SYSTEMS¡NKL!</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous" />
            <link rel="shortcut icon" href="../../app/img/icono1.png" type="image/x-icon">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>

    <body>

    <nav style="background: #392467" class="navbar navbar-expand-sm navbar-dark">
      <div class="container">
        <a style="color: wheat;" class="navbar-brand fw-bold" href="<?php echo $url_base; ?>">SYSTEMS¡NKL!</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a style="color: wheat;" class="nav-link active fw-bold" href="<?php echo $url_base; ?>contactos" aria-current="page">Tabla de Pacientes</a>
                </li>
                <li class="nav-item">
                    <a style="color: wheat;" class="nav-link active fw-bold" href="<?php echo $url_base; ?>doctores">tabla de doctores</a>
                </li>

                <li class="nav-item">
                    <a style="color: wheat;" class="nav-link active fw-bold" href="<?php echo $url_base; ?>citas">Tabla de Citas</a>
                </li>

        <li class="nav-item dropdown">
          <a style="color: wheat;" class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mas tablas
          </a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a style="color: crimson;" class="dropdown-item fw-bold" href="<?php echo $url_base; ?>especialidades">Especialidades medicas</a></li>

            <li><a style="color: crimson;" class="dropdown-item fw-bold" href="<?php echo $url_base; ?>horario">Horario</a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a style="color: crimson;" class="dropdown-item fw-bold" href="<?php echo $url_base; ?>acerca">Acerca de</a></li>

            <li><a style="color: crimson;" class="dropdown-item fw-bold" href="<?php echo $url_base; ?>nosotros">Sobre nosotros</a></li>
           </ul>

        </li>

            </ul>
            <button type="submit" class="btn btn-danger fw-bold" data-bs-toggle="modal" data-bs-target="#create">
             Cerrar Sesion
           </button>

           <!-- <a style="background: crimson;" href="../../app/validar/login.php" class="btn text-white fw-bold" role="button">Cerrar Sesion</a>-->
      
        </div>
  </div>
</nav>
      
</nav>

<main class="contenedor">

<?php include("create.php"); ?>
