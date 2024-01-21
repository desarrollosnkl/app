<?php

include("../db.php");


if(isset($_GET['id'])) {

    $txtid = (isset($_GET['id'])?$_GET['id']:"");
    $nkl = $conexion -> prepare("SELECT * FROM contactos WHERE id=:txtid");
    $nkl -> bindParam(":txtid",$txtid);
    $nkl -> execute();

    $registro = $nkl -> fetch(PDO::FETCH_LAZY);
    $nombres = $registro['nombres'];
    $apellidos = $registro['apellidos'];
    $cedula = $registro['cedula'];
    $telefono = $registro['telefono'];
    $direccion = $registro['direccion'];
    $fecha = $registro['fecha'];

}

if($_POST) {

$txtid = (isset($_POST['txtid'])?$_POST['txtid']:"");
$nombres = (isset($_POST['nombres'])?$_POST['nombres']:"");
$apellidos = (isset($_POST['apellidos'])?$_POST['apellidos']:"");
$cedula = (isset($_POST['cedula'])?$_POST['cedula']:"");
$telefono = (isset($_POST['telefono'])?$_POST['telefono']:"");
$direccion = (isset($_POST['direccion'])?$_POST['direccion']:"");
$fecha = (isset($_POST['fecha'])?$_POST['fecha']:"");

$nkl = $conexion -> prepare("UPDATE contactos SET nombres=:nombres,apellidos=:apellidos,cedula=:cedula,telefono=:telefono,direccion=:direccion,fecha=:fecha WHERE id=:txtid");

$nkl -> bindParam(":nombres",$nombres);
$nkl -> bindParam(":apellidos",$apellidos);
$nkl -> bindParam(":cedula",$cedula);
$nkl -> bindParam(":telefono",$telefono);
$nkl -> bindParam(":direccion",$direccion);
$nkl -> bindParam(":fecha",$fecha);
$nkl -> bindParam(":txtid",$txtid);

$nkl -> execute();

header("location:index.php");

}

?>

<!doctype html>
<html lang="es
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>DESARROLLOS¡NKL!</title>
  </head>
  <body style="background: #392467;">

 
  <form  action="" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                    <br><br>
                            
                    <h3 style="font-weight: bold;" class="text-center text-white">Modificar Tabla:</h3>
                        
              <form action="" method="post">

             
               <input type="hidden" class="form-control" name="txtid" value="<?php echo $txtid; ?>" placeholder="ingrese su nombre">

               <div class="form-group">
              <label style="font-weight: bold;" for="nombres" class="text-white">Nombre:</label>
               <input type="text" class="form-control" name="nombres" value="<?php echo $nombres; ?>" placeholder="ingrese su nombre">
              </div>

                <div class="form-group">
              <label style="font-weight: bold;" for="apellidos" class="text-white">Apellido:</label>
               <input type="text" class="form-control" name="apellidos" value="<?php echo $apellidos; ?>" placeholder="ingrese su apellido">
                </div>

             <div class="form-group">
              <label style="font-weight: bold;" for="cedula" class="text-white">Cedula:</label>
               <input type="text" class="form-control" name="cedula" value="<?php echo $cedula; ?>" placeholder="ingrese su cedula">
            </div>

            <div class="form-group"> 
              <label style="font-weight: bold;" for="telefono" class="text-white">Telefono:</label>
               <input type="text" class="form-control" name="telefono" value="<?php echo $telefono; ?>" placeholder="ingrese su telefono">
            </div>

            <div class="form-group">
               <label style="font-weight: bold;" for="direccion" class="text-white">Direccion:</label>
               <input type="text" class="form-control" name="direccion" value="<?php echo $direccion; ?>" placeholder="ingrese su direccion">
            </div>
 
            <div class="form-group">
              <label style="font-weight: bold;" for="fecha" class="text-white">Fecha:</label>
               <input type="date" class="form-control" name="fecha" value="<?php echo $fecha; ?>" placeholder="ingrese su fecha">
            </div>

             <div class="modal-footer">
              <button type="submit" class="btn btn-warning">Actualizar</button>
              <a href="index.php" class="btn btn-danger">Cerrar</a>
            </div>

              </form>
                    
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
          
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>