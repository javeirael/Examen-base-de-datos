<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Bootstrap CSS -->
            <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Edición Producto</title>
</head>
<body>
<?php
include ('../conec.php');//Conexión a la Base de Datos//
$id = $_GET['id'];
$consulta = "SELECT * FROM usuarios WHERE codigo ='$id'";
$resultado =mysqli_query($conexion, $consulta);
$fila= mysqli_fetch_array($resultado);
?> 
    <form action = "editarusuario.php" method="post">
      <div class="mb-3">
        <label class="form-label">Editar el nombre del usuario</label>
        <input type="text" class="form-control" name="nombre" value = "<?php echo $fila["nombre"] ?>"/>
      </div>
      <div class="mb-3">
        <label class="form-label">Editar el apellido paterno del usuario</label>
        <input type="text" class="form-control" name="apellido_paterno" value = "<?php echo $fila["apellido_paterno"] ?>"/>
      </div>
      <div class="mb-3">
        <label class="form-label">Editar el apellido materno del usuario</label>
        <input type="text" class="form-control" name="apellido_materno" value = "<?php echo $fila["apellido_materno"] ?>"/>
      </div>
      <div class="mb-3">
        <label class="form-label">Editar el telefono del usuario</label>
        <input type="text" class="form-control" name="telefono" value = "<?php echo $fila["telefono"] ?>"/>
      </div>
      <div class="mb-3">
        <label class="form-label">Editar el correo del usuario</label>
        <input type="text" class="form-control" name="correo" value = "<?php echo $fila["correo"] ?>"/>
      </div>
      <div class="mb-3">
        <label class="form-label">Editar el usuario del usuario</label>
        <input type="text" class="form-control" name="usuario" value = "<?php echo $fila["usuario"] ?>"/>
      </div>
      <div class="mb-3">
        <label class="form-label">Editar la contraseña del usuario</label>
        <input type="text" class="form-control" name="contrasena" value = "<?php echo $fila["contraseña"] ?>"/>
      </div>
      <input type="hidden" name="id" value="<?php echo $fila["codigo"] ?>"/>
      <input type="submit" name="Enviar" value="Editar usuario" class="btn btn-primary"/>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
</body>
</html>