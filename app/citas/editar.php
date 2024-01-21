<?php

include("../db.php");


if(isset($_GET['id'])) {

    $txtid = (isset($_GET['id'])?$_GET['id']:"");
    $nkl = $conexion -> prepare("SELECT * FROM citas WHERE id=:txtid");
    $nkl -> bindParam(":txtid",$txtid);
    $nkl -> execute();

    $registro = $nkl -> fetch(PDO::FETCH_LAZY);
    $fecha = $registro['fecha'];
    $hora = $registro['hora'];
    $paciente = $registro['paciente'];
    $doctor = $registro['doctor'];
    $especialidad = $registro['especialidad'];
    $observacion = $registro['observacion'];
    $estado = $registro['estado'];
    $rol = $registro['rol'];

}

if($_POST) {

$txtid = (isset($_POST['txtid'])?$_POST['txtid']:"");
$fecha = (isset($_POST['fecha'])?$_POST['fecha']:"");
$hora = (isset($_POST['hora'])?$_POST['hora']:"");
$paciente = (isset($_POST['paciente'])?$_POST['paciente']:"");
$doctor = (isset($_POST['doctor'])?$_POST['doctor']:"");
$especialidad = (isset($_POST['especialidad'])?$_POST['especialidad']:"");
$observacion = (isset($_POST['observacion'])?$_POST['observacion']:"");
$estado = (isset($_POST['estado'])?$_POST['estado']:"");
$rol = (isset($_POST['rol'])?$_POST['rol']:"");

$nkl = $conexion -> prepare("UPDATE citas SET fecha=:fecha,hora=:hora,paciente=:paciente,doctor=:doctor,especialidad=:especialidad,observacion=:observacion,estado=:estado,rol=:rol WHERE id=:txtid");

$nkl -> bindParam(":fecha",$fecha);
$nkl -> bindParam(":hora",$hora);
$nkl -> bindParam(":paciente",$paciente);
$nkl -> bindParam(":doctor",$doctor);
$nkl -> bindParam(":especialidad",$especialidad);
$nkl -> bindParam(":observacion",$observacion);
$nkl -> bindParam(":estado",$estado);
$nkl -> bindParam(":rol",$rol);
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
              <label style="font-weight: bold;" for="fecha" class="text-white">Fecha:</label>
               <input type="date" class="form-control" name="fecha" value="<?php echo $fecha; ?>" placeholder="ingrese su fecha">
              </div>

                <div class="form-group">
              <label style="font-weight: bold;" for="hora" class="text-white">Hora:</label>
               <input type="time" class="form-control" name="hora" value="<?php echo $hora; ?>" placeholder="ingrese su hora">
                </div>

             <div class="form-group">
              <label style="font-weight: bold;" for="paciente" class="text-white">Paciente:</label>
               <input type="text" class="form-control" name="paciente" value="<?php echo $paciente; ?>" placeholder="ingrese su paciente">
            </div>

            <div class="form-group"> 
              <label style="font-weight: bold;" for="doctor" class="text-white">Doctor:</label>
               <input type="text" class="form-control" name="doctor" value="<?php echo $doctor; ?>" placeholder="ingrese su doctor">
            </div>

            <div class="form-group">
               <label style="font-weight: bold;" for="especialidad" class="text-white">Especialidad:</label>
               <input type="text" class="form-control" name="especialidad" value="<?php echo $especialidad; ?>" placeholder="ingrese su especialidad">
            </div>
 
            <div class="form-group">
              <label style="font-weight: bold;" for="observacion" class="text-white">Observacion:</label>
               <input type="text" class="form-control" name="observacion" value="<?php echo $observacion; ?>" placeholder="ingrese su observacion">
            </div>

            
            <div class="form-group">
              <label style="font-weight: bold;" for="estado" class="text-white">Estado:</label>
               <input type="text" class="form-control" name="estado" value="<?php echo $estado; ?>" placeholder="ingrese su estado">
            </div>

            <div class="form-group">
              <label style="font-weight: bold;" for="rol" class="text-white">Fecha de la siguiente cita:</label>
               <input type="date" class="form-control" name="rol" value="<?php echo $rol; ?>" placeholder="ingrese su fecha">
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