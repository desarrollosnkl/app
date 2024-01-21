<?php  
include("../db.php");

$nkl = $conexion -> prepare("SELECT * FROM doctores");
$nkl -> execute();
$doctores = $nkl -> fetchAll(PDO::FETCH_ASSOC);

// ELIMINAR DE TABLA...

if(isset($_GET['id'])) {

    $txtid = (isset($_GET['id'])?$_GET['id']:"");
    
    $nkl = $conexion -> prepare("DELETE FROM doctores WHERE id=:txtid");
    $nkl -> bindParam(":txtid",$txtid);
    $nkl -> execute();
    
    header("location:index.php");
    
    }

?>

<?php include("../template/header.php"); ?>

<div class="contenedor p-4">
<h2 style="color: brown;" class="fw-bold">SYSTEMS¡NKL!</h2>
<h2 style="color: brown;" class="fw-bold">Tabla de Doctores:</h2>

<a style="background:brown;" class="btn text-white fw-bold" href="agregar.php">Registrar Doctor
<i class='bx bxs-grid'></i> </a>

<a style="background: #1d2c3f;" class="btn text-white fw-bold" href="execel.php">Excel
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
                <th scope="col">FOLIO</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">ESPECIALIDAD</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">SEXO</th>
                <th scope="col">FECHA DE REGISTRO</th>
                <th scope="col">FECHA DE NACIMIENTO</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

<?php foreach($doctores as $doctor) { ?>

            <tr class="">
                <td scope="row"><?php echo $doctor['id']; ?></td>
                <td><?php echo $doctor['nombre']; ?></td>
                <td><?php echo $doctor['especialidad']; ?></td>
                <td><?php echo $doctor['telefono']; ?></td>
                <td><?php echo $doctor['sexo']; ?></td>
                <td><?php echo $doctor['fecha']; ?></td>
                <td><?php echo $doctor['rol']; ?></td>
                <td>
                <a href="editar.php?id=<?php echo $doctor['id']; ?>" class="btn btn-warning" role="button"><img src="../img/editar.svg" alt=""></a>

                <a href="javascript:borrar(<?php echo $doctor['id']; ?>);" class="btn btn-danger" role="button"><img src="../img/eliminar.svg" alt=""></a>
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