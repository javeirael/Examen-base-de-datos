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
$consulta = "SELECT * FROM producto WHERE codigo ='$id'";
$resultado =mysqli_query($conexion, $consulta);
$fila= mysqli_fetch_array($resultado);
?> 
    <form action = "editarproducto.php" method="post">
      <div class="mb-3">
        <label class="form-label">Editar el nombre del producto</label>
        <input type="text" class="form-control" name="nombre" value = "<?php echo $fila["nombre"] ?>"/>
      </div>
      <div class="mb-3">
            <label class="from-lable">Editar el precio del producto</label>
            <input type="number" class="form-control" name="precio" value= "<?php echo $fila["precio"] ?>" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Editar el nombre del fabricante</label>
            <select class="form-select" aria-label="Default select example" name="codigoFabricante" value="<?php echo $fila["fabricante"] ?>">
            <?php
              include('conec.php');
              $consulta2="CALL sp_mostrarFabricante";//"SELECT * FROM fabricante";
              $resultado2=mysqli_query($conexion,$consulta2);
              while($fila2=mysqli_fetch_array($resultado2)){
                ?>
                <option value="<?php echo $fila2["codigo"]?>"><?php echo $fila2["nombre"]?></option>
              <?php } ?>
            </select>
            
      <input type="hidden" name="id" value="<?php echo $fila["codigo"] ?>"/>
      <input type="submit" name="Enviar" value="Editar producto" class="btn btn-primary"/>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
</body>
</html>