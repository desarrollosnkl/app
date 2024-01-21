<?php

require_once ("../db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");

$stm = $conexion -> prepare("SELECT * FROM contactos");
$stm -> execute();
$contactos = $stm -> fetchAll(PDO::FETCH_ASSOC);


?>
<div class="table-responsive">
<table class="table table-dark">
  <thead">
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Cedula</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>


  <?php foreach($contactos as $contacto){ ?>
    <tr>
    <th scope="row"><?php echo $contacto['id']; ?></th>
      <td><?php echo $contacto['nombres']; ?></td>
      <td><?php echo $contacto['apellidos']; ?></td>
      <td><?php echo $contacto['cedula']; ?></td>
      <td><?php echo $contacto['telefono']; ?></td>
      <td><?php echo $contacto['direccion']; ?></td>
      <td><?php echo $contacto['fecha']; ?></td>
    </tr>
   
<?php } ?>

  </tbody>
</table>
</div>