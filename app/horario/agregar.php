<?php 

$conexion = mysqli_connect("localhost","root","","app");

if(isset($_POST['registrar'])) {

    if(strlen($_POST['dias']) 
     >= 1 && strlen($_POST['doctor']) 
     >= 1 && strlen($_POST['fecha']) >= 1) {

  $dias = trim($_POST['dias']);
  $doctor = trim($_POST['doctor']);
  $fecha = trim($_POST['fecha']);


  $consulta = "INSERT INTO horario (dias,doctor,fecha) VALUES('$dias','$doctor','$fecha')";
  
  mysqli_query($conexion,$consulta);
  mysqli_close($conexion);

  header("location:index.php");

     }
}

 ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>DESARROLLOS¡NKL!</title>
    
  </head>
  <body>

	<style>

body {
	background: #392467;
}

	</style>

  <form  action="" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br><br><br><br>
                          
                            <h2 style="font-weight: bold;" class="text-center text-white">Dia de atencion medica:</h2>
                            <div class="form-group">

                            <label style="font-weight: bold;" for="dias" class="form-label text-white">Dias medica:</label>
                            <input type="text"  id="dias" name="dias" class="form-control" placeholder="ingrese su dias" required>
                            </div>

                            <div class="form-group">
                                <label style="font-weight: bold;" for="doctor" class="text-white">Doctor:</label><br>
                                <input type="text" name="doctor" id="doctor" class="form-control" placeholder="ingrese su doctor">
                            </div>
                        
                            <div class="form-group">
                            <label style="font-weight: bold;" for="fecha" class="text-white">Fecha de registro:</label><br>
                                <input type="date" name="fecha" id="fecha" class="form-control" placeholder="ingrese su fecha" required>
                                 
                            </div>

                                <div class="mb-3">  
                               <input type="submit" value="Agregar"class="btn btn-warning" 
                               name="registrar">
                               <a href="index.php" class="btn btn-danger">Cancelar</a>
                               
                            </div>
                            </div>
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