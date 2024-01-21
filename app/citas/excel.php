<?php

require_once ("../db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");

$stm = $conexion -> prepare("SELECT * FROM citas");
$stm -> execute();
$citas = $stm -> fetchAll(PDO::FETCH_ASSOC);


?>
<div class="table-responsive">
<table class="table table-dark">
  <thead">
    <tr>
    <th scope="col">FECHA DE CITA</th>
    <th scope="col">HORA</th>
    <th scope="col">PACIENTE</th>
    <th scope="col">DOCTOR</th>
    <th scope="col">ESPECIALIDAD</th>
    <th scope="col">OBSERVACION</th>
     <th scope="col">ESTADO</th>
     <th scope="col">SIGUIENTE CITA</th>
    </tr>
  </thead>
  <tbody>


  <?php foreach($citas as $cita){ ?>
    <tr>
                <td><?php echo $cita['fecha']; ?></td>
                <td><?php echo $cita['hora']; ?></td>
                <td><?php echo $cita['paciente']; ?></td>
                <td><?php echo $cita['doctor']; ?></td>
                <td><?php echo $cita['especialidad']; ?></td>
                <td><?php echo $cita['observacion']; ?></td>
                <td><?php echo $cita['estado']; ?></td>
                <td><?php echo $cita['rol']; ?></td>
    </tr>
   
<?php } ?>

  </tbody>
</table>
</div>