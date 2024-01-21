
<?php 

$usuario = $_POST['usuario'];
$password = md5($_POST['password']); 

session_start();

$_SESSION['usuario'] = $usuario;

include("db.php");

$consulta = "SELECT * FROM validar WHERE usuario='$usuario' AND password='$password'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas ) {

header("location:../index.php");

} else {
    ?>
    <?php
    include("login.php");

    echo "<script language='JavaScript'>
       alert('Usuario o Contraseña Incorrecta');
        location.assign('login.php');
        </script>";
    ?>
    <br>
     <!--<h5 class="text-center" style="color: white;">¿ERROR EN USUARIO O CONTRASEÑA?</h5>-->
     <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);


?>



