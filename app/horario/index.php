<?php 
include("../db.php");

$nkl = $conexion -> prepare("SELECT * FROM horario");
$nkl -> execute();
$horario = $nkl -> fetchAll(PDO::FETCH_ASSOC);

// ELIMINAR DE LA BASE DE DATOS Y LA TABBLA....

if(isset($_GET['id'])) {

$txtid = (isset($_GET['id'])?$_GET['id']:"");

$nkl = $conexion -> prepare("DELETE FROM horario WHERE id=:txtid");
$nkl -> bindParam(":txtid",$txtid);
$nkl -> execute();

header("location:index.php");

}



 ?>

<?php include("../template/header.php"); ?>

<div class="contenedor p-4">
<h2 style="color: brown;" class="fw-bold">SYSTEMS¡NKL!</h2>
<h2 style="color: brown;" class="fw-bold">Horario del medico:</h2>

<a style="background:midnightblue;" class="btn text-white fw-bold" href="agregar.php">Registrar horario
<i class='bx bxs-grid'></i> </a>

<a style="background:brown;" class="btn text-white fw-bold" href="excel.php">Excel
<i class='bx bxs-grid'></i> </a>

<br>

<br>
</form>
      <div class="container-fluid">
  <form class="d-flex">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscador">
      <hr>
  </form>
<br>

<div class="table-responsive">
<table class="table table-bordered table-success table_id">
  <thead class="table table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">DIAS DE ATENCION MEDICA</th>
                <th scope="col">DOCTOR</th>
                <th scope="col">FECHA DE REGISTRO</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

   <?php foreach($horario as $horarios) { ?>


            <tr class="">
                <td scope="row"><?php echo $horarios['id']; ?></td>
                <td><?php echo $horarios['dias']; ?></td>
                <td><?php echo $horarios['doctor']; ?></td>
                <td><?php echo $horarios['fecha']; ?></td>

     <td>
         <a href="editar.php?id=<?php echo $horarios['id']; ?>" class="btn btn-warning" role="button"><img src="../img/editar.svg" alt=""></a>
         
         <a href="javascript:borrar(<?php echo $horarios['id']; ?>);" class="btn btn-danger" role="button"><img src="../img/eliminar.svg" alt=""></a>
     </td>     

</tr>

    <?php } ?>

        </tbody>
    </table>
</div>

<script>
        function borrar(id) {

Swal.fire({
title: '¿Deseas Borrar el registro?',
showCancelButton: true,
confirmButtonText: 'Si, Borrar',
}).then((result) => {
if (result.isConfirmed) {

window.location ="index.php?id="+id;

} else if (result.isDenied) {
Swal.fire('Changes are not saved', '', 'info')
}
})
}
</script>

<?php include("../template/footer.php"); ?>