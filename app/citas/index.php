<?php 
include("../db.php");

//AGREGAR A LA BASE DE DATOS....

$nkl = $conexion -> prepare("SELECT * FROM citas");
$nkl ->  execute();
$citas = $nkl -> fetchAll(PDO::FETCH_ASSOC);


if(isset($_GET['id'])) {

$txtid = (isset($_GET['id'])?$_GET['id']:"");

$nkl = $conexion -> prepare("DELETE FROM citas WHERE id=:txtid");
$nkl -> bindParam(":txtid",$txtid);
$nkl -> execute();

header("location:index.php");

}

 ?>


<?php include("../template/header.php"); ?>

<div class="contenedor p-4">
<h2 style="color: brown;" class="fw-bold">SYSTEMS¡NKL!</h2>
<h2 style="color: brown;" class="fw-bold">Tabla de citas medicas:</h2>

<a style="background:slateblue;" class="btn text-white fw-bold" href="agregar.php">Registrar citas
<i class='bx bxs-grid'></i> </a>

<a style="background:blue;" class="btn text-white fw-bold" href="excel.php">Excel
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
<table class="table table-bordered table-primary table_id">
  <thead class="table table-dark">
            <tr>
                
                <th scope="col">FECHA DE CITA</th>
                <th scope="col">HORA</th>
                <th scope="col">PACIENTE</th>
                <th scope="col">DOCTOR</th>
                <th scope="col">ESPECIALIDAD</th>
                <th scope="col">OBSERVACION</th>
                <th scope="col">ESTADO</th>
                <th scope="col">SIGUIENTE CITA</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

<?php foreach($citas as $cita) { ?>

            <tr class="">
              
                <td><?php echo $cita['fecha']; ?></td>
                <td><?php echo $cita['hora']; ?></td>
                <td><?php echo $cita['paciente']; ?></td>
                <td><?php echo $cita['doctor']; ?></td>
                <td><?php echo $cita['especialidad']; ?></td>
                <td><?php echo $cita['observacion']; ?></td>
                <td><?php echo $cita['estado']; ?></td>
                <td><?php echo $cita['rol']; ?></td>
                <td>
                <a href="editar.php?id=<?php echo $cita['id']; ?>" class="btn btn-warning" role="button"><img src="../img/editar.svg" alt=""></a>   

                <a href="javascript:borrar(<?php echo $cita['id']; ?>);" class="btn btn-danger" role="button"><img src="../img/eliminar.svg" alt=""></a>   
                  
                </td>
            </tr>

   <?php } ?>

        </tbody>
    </table>
</div>

<script>

function borrar(id) {

Swal.fire({
title: '¿Deseas Eliminar el registro?',
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