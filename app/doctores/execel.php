<?php

require_once ("../db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");

$stm = $conexion -> prepare("SELECT * FROM doctores");
$stm -> execute();
$doctores = $stm -> fetchAll(PDO::FETCH_ASSOC);


?>
<div class="table-responsive">
<table class="table table-dark">
  <thead">
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">especialidad</th>
      <th scope="col">telefono</th>
      <th scope="col">sexo</th>
      <th scope="col">fecha de registro</th>
      <th scope="col">Fecha de nacimiento</th>
    </tr>
  </thead>
  <tbody>


  <?php foreach($doctores as $doctor){ ?>
    <tr>
    <th scope="row"><?php echo $doctor['id']; ?></th>
      <td><?php echo $doctor['nombre']; ?></td>
      <td><?php echo $doctor['especialidad']; ?></td>
      <td><?php echo $doctor['telefono']; ?></td>
      <td><?php echo $doctor['sexo']; ?></td>
      <td><?php echo $doctor['fecha']; ?></td>
      <td><?php echo $doctor['rol']; ?></td>
    </tr>
   
<?php } ?>

  </tbody>
</table>
</div>