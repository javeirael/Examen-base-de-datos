<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"
    />
    <title>Usuarios</title>
  </head>
  <body>
<?php
include('partials/nav.html');
?>
    <h3>Crear Usuario</h3>
    <form action="registrousuarios.php" method="post">
      <div class="mb-3">
        <label class="form-label">Ingresa el nombre:</label>
        <input
        type="text"
        class="form-control"
        name="nombre" required/>
      </div>
      <div class="mb-3">
      <label class="form-label">Ingresa el apellido paterno:</label>
      <input
      type="text"
      class="form-control"
      name="apellido_paterno" required/>
      <div class="mb-3">
        <label class="form-label">Ingresa el apellido materno:</label>
        <input
        type="text"
        class="form-control"
        name="apellido_materno" required/>
      <div class="mb-3">
            <label class="form-label">Ingresa el número de teléfono:</label>
            <input
            type="text"
            class="form-control"
            name="telefono" required/>
      <div class="mb-3">
            <label class="form-label">Ingresa el correo electrónico:</label>
            <input
            type="text"
            class="form-control"
            name="correo" required/>
      <div class="mb-3">
            <label class="form-label">Ingresa el usuario:</label>
            <input
            type="text"
            class="form-control"
            name="usuario" required/>
      <div class="mb-3">
            <label class="form-label">Ingresa la contraseña:</label>
            <input
            type="text"
            class="form-control"
            name="contrasena" required/>
           </select>
         </div>
       <input type="submit" name="Enviar" value="Insertar usuario" class="btn btn-primary"/>
   </form>
  <!--Inicio de la tabla Usuarios-->
<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">apellido_paterno</th>
      <th scope="col">apellido_materno</th>
      <th scope="col">telefono</th>
      <th scope="col">correo</th>
      <th scope="col">usuario</th>
      <th scope="col">contraseña</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Editar</th>
</thead>
<tbody>
<?php
include ('conec.php');/*Conexión a la Base de Datos*/
//$Consulta = "SELECT * FROM usuarios";
$Consulta="CALL sp_mostrarUsuarios";
$resultado =mysqli_query($conexion, $Consulta);
while($fila= mysqli_fetch_array($resultado)){
?>
<tr>
<th scope="row"><?php echo $fila ["codigo"] ?></th>
    <td><?php echo $fila ["nombre"] ?></td>
    <td><?php echo $fila ["apellido_paterno"] ?></td>
    <td><?php echo $fila ["apellido_materno"] ?></td>
    <td><?php echo $fila ["telefono"] ?></td>
    <td><?php echo $fila ["correo"] ?></td>
    <td><?php echo $fila ["usuario"] ?></td>
    <td><?php echo $fila ["contraseña"] ?></td>

    <!--Boton Eliminar Usuarios-->
    <td>
              <a target="_self" href="acciones/eliminarUsuario.php?id=<?php echo $fila["codigo"] ?>"< class="bi bi-trash3-fill text-danger">Eliminar</i>
            </td>
            <td>
            <a target="_blank" href="acciones/edicionUsuario.php?id=<?php echo $fila["codigo"] ?>">
            <i class="bi bi-pencil-square text-primary">Editar</i>
          </td>
</tr>
<?php } ?>
</tbody>
</table>
     <!--Fin de la tabla-->
         <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
  </body>
</html>