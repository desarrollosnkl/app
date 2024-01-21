<?php 

$conexion = mysqli_connect("localhost","root","","app");

if(isset($_POST['registrar'])) {

if(strlen($_POST['fecha']) 
>=1 && strlen($_POST['hora'])
>=1 && strlen($_POST['paciente'])
>=1 && strlen($_POST['doctor'])
>=1 && strlen($_POST['especialidad'])
>=1 && strlen($_POST['observacion']) 
>=1 && strlen($_POST['estado'])
>=1 && strlen($_POST['rol']) >= 1) {

$fecha = trim($_POST['fecha']);
$hora = trim($_POST['hora']);
$paciente = trim($_POST['paciente']);
$doctor = trim($_POST['doctor']);
$especialidad = trim($_POST['especialidad']);
$observacion = trim($_POST['observacion']);
$estado = trim($_POST['estado']);
$rol = trim($_POST['rol']);

$consulta = "INSERT INTO citas (fecha,hora,paciente,doctor,especialidad,observacion,estado,rol) VALUES ('$fecha','$hora','$paciente','$doctor','$especialidad','$observacion','$estado','$rol')";

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
                    
                            <br><br>
                          
                            <h2 style="font-weight: bold;" class="text-center text-white">Registrar citas:</h2>
                            <div class="form-group">

                            <label style="font-weight: bold;" for="fecha" class="form-label text-white">Fecha de citas:</label>
                            <input type="date"  id="fecha" name="fecha" class="form-control" placeholder="ingrese su fechas" required>
                            </div>

                            <div class="form-group">
                                <label style="font-weight: bold;" for="hora" class="text-white">Hora:</label><br>
                                <input type="time" name="hora" id="hora" class="form-control" placeholder="ingrese su hora">
                            </div>

                            <div class="form-group">
                                <label style="font-weight: bold;" for="paciente" class="text-white">Paciente:</label><br>
                                <input type="text" name="paciente" id="paciente" class="form-control" placeholder="ingrese su paciente">
                            </div>
                        
                            <div class="form-group">
                            <label style="font-weight: bold;" for="doctor" class="text-white">Doctor:</label><br>
                                <input type="text" name="doctor" id="doctor" class="form-control" placeholder="ingrese su doctor" required>
                            </div>

                            <div class="form-group">
                                  <label style="font-weight: bold;" for="especialidad" class="form-label text-white">Especialidad:</label>
                                <input type="text"  id="especialidad" name="especialidad" class="form-control" placeholder="ingrese su especialidad" required>
                                
                           </div>

                            <div class="form-group">
                                  <label style="font-weight: bold;" for="observacion" class="form-label text-white">Observacion:</label>
                                  <input type="text"  id="observacion" name="observacion" class="form-control" placeholder="ingrese su observacion" required>
                                
                           </div>

                           <div class="form-group">
                                  <label style="font-weight: bold;" for="estado" class="form-label text-white">Estado</label>
                                <input type="text"  id="estado" name="estado" class="form-control" placeholder="ingrese su estado" required>
                                
                           </div>
                        
                           <div class="form-group">
                                  <label style="font-weight: bold;" for="fecha" class="form-label text-white">Fecha de la proxima cita</label>
                                <input type="date"  id="rol" name="rol" class="form-control" placeholder="ingrese su fecha" required>
                                
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