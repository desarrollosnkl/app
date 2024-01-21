<?php

require_once ("../db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");

$stm = $conexion -> prepare("SELECT * FROM horario");
$stm -> execute();
$horario = $stm -> fetchAll(PDO::FETCH_ASSOC);


?>
<div class="table-responsive">
<table class="table table-dark">
  <thead">
    <tr>
    <th scope="col">ID</th>
    <th scope="col">DIAS DE ATENCION MEDICA</th>
    <th scope="col">DOCTOR</th>
    <th scope="col">FECHA DE REGISTRO</th>
    </tr>
  </thead>
  <tbody>


  <?php foreach($horario as $horarios){ ?>
    <tr>
    <td scope="row"><?php echo $horarios['id']; ?></td>
    <td><?php echo $horarios['dias']; ?></td>
     <td><?php echo $horarios['doctor']; ?></td>
    <td><?php echo $horarios['fecha']; ?></td>
    </tr>
   
<?php } ?>

  </tbody>
</table>
</div>