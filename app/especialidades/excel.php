<?php

require_once ("../db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");

$stm = $conexion -> prepare("SELECT * FROM especialidades");
$stm -> execute();
$especialidades = $stm -> fetchAll(PDO::FETCH_ASSOC);


?>
<div class="table-responsive">
<table class="table table-dark">
  <thead">
    <tr>
    <th scope="col">ID</th>
    <th scope="col">ESPECIALIDADES MEDICAS</th>
    <th scope="col">FECHA DE REGISTRO</th>
    </tr>
  </thead>
  <tbody>


  <?php foreach($especialidades as $especial){ ?>
    <tr>
    <td scope="row"><?php echo $especial['id']; ?></td>
    <td><?php echo $especial['especialidades']; ?></td>
    <td><?php echo $especial['fecha']; ?></td>
    </tr>
   
<?php } ?>

  </tbody>
</table>
</div>