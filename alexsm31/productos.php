<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
     crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <title>productos</title>
</head>
<body>
<?php
include('partials/nav.html');
?>
    <h3>Ingrese un producto</h3>
    <form action="registroproducto.php" method="POST">
        <div class="mb-3">
            <label class="from-lable">Ingresa el nombre del producto</label>
            <input type="text" class="form-control" name="nomProducto" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Ingresa el precio del producto</label>
            <input type="number" class="form-control" name="preProducto" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Ingresa el nombre del fabricante</label>
            <select class="form-select" aria-label="Default select example" name="codProducto">
              <?php
              include('conec.php');
              $consulta2="SELECT * FROM fabricante";
              $resultado2=mysqli_query($conexion,$consulta2);
              while($fila2=mysqli_fetch_array($resultado2)){
                ?>
                <option value="<?php echo $fila2["codigo"]?>"><?php echo $fila2["nombre"]?></option>
              <?php } ?>
            </select>
        </div>
        <input type="submit" name="enviar" value="Insertar producto" class="btn btn-primary">
    </form>
    <!--INICIO TABLA DE PRODUCTOS-->
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Codigo fabricante</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Editar</th>
          </tr>
        </thead>
        <tbody>
        <?php
          include('conec.php'); // Conexion a la bd
          //$consulta = "SELECT producto.codigo,producto.nombre,producto.precio,fabricante.nombre AS fabricante FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo";
          //"CALL sp_mostrarProducto"
          $consulta="SELECT * FROM producto";
        

          $resultado =mysqli_query($conexion,$consulta);

          while($fila =mysqli_fetch_array($resultado)){

          
          ?>
          <tr>
            <th scope="row"> <?php echo $fila["codigo"] ?></th>
            <td> <?php echo $fila["nombre"] ?></td>
            <td> <?php echo $fila["precio"] ?></td>
            <!--<td> <?php echo $fila["fabricante"] ?></td>-->
            <td> <?php echo $fila["codigo_fabricante"] ?></td>
            
            <!-- BOTON DE ELIMINAR -->
            <td>
              <a target="_self" href="acciones/eliminarproducto.php?id=<?php echo $fila["codigo"] ?>"< class="bi bi-trash3-fill text-danger">Eliminar</i>
            </td>
            <td>
            <a target="_blank" href="acciones/edicionproducto.php?id=<?php echo $fila["codigo"] ?>">
            <i class="bi bi-pencil-square text-primary">Editar</i>
          </td>

          </tr>
          <tr>
          <?php } ?>
        </tbody>
      </table>
    <!--FIN TABLA-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

</body>
</html>