
<?php 

include("../db.php");

//AGREGAR A LA BASE DE DATOS....

$nkl = $conexion -> prepare("SELECT * FROM contactos");
$nkl ->  execute();
$contactos = $nkl -> fetchAll(PDO::FETCH_ASSOC);


if(isset($_GET['id'])) {

$txtid = (isset($_GET['id'])?$_GET['id']:"");

$nkl = $conexion -> prepare("DELETE FROM contactos WHERE id=:txtid");
$nkl -> bindParam(":txtid",$txtid);
$nkl -> execute();

header("location:index.php");

}

 ?>


<?php include("../template/header.php"); ?>

<div class="contenedor p-4">
<h2 style="color: brown;" class="fw-bold">SYSTEMS¡NKL!</h2>
<h2 style="color: brown;" class="fw-bold">Tabla de Pacientes:</h2>

<a style="background: crimson;" class="btn text-white fw-bold" href="agregar.php">Registrar pacientes
<i class='bx bxs-grid'></i> </a>

<a style="background: navy;" class="btn text-white fw-bold" href="excel.php">Excel
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
<table  class="table table-bordered table-primary table_id">
  <thead  class="table table-dark">
            <tr>
            <th scope="col">ID</th>  
            <th scope="col">NOMBRES</th>
                <th scope="col">APELLIDOS</th>
                <th scope="col">CEDULA</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">DIRECCION</th>
                <th scope="col">FECHA</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

<?php foreach($contactos as $contacto) { ?>

            <tr class="">
                <td scope="row"><?php echo $contacto['id']; ?></td>
                <td><?php echo $contacto['nombres']; ?></td>
                <td><?php echo $contacto['apellidos']; ?></td>
                <td><?php echo $contacto['cedula']; ?></td>
                <td><?php echo $contacto['telefono']; ?></td>
                <td><?php echo $contacto['direccion']; ?></td>
                <td><?php echo $contacto['fecha']; ?></td>

                <td>
                <a href="editar.php?id=<?php echo $contacto['id']; ?>" class="btn btn-warning" role="button"><img src="../img/editar.svg" alt=""></a>

                <a href="javascript:borrar(<?php echo $contacto['id']; ?>);" class="btn btn-danger" role="button"><img src="../img/eliminar.svg" alt=""></a>

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