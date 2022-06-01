<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>comprador</title>
    <h3>Ingrese un comprador</h3>
    <form action="registrocomprador.php" method="POST">
        <div class="mb-3">
            <label class="from-lable">Ingresa el usuario del comprador </label>
            <input type="text" class="form-control" name="usucomprador" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Ingresa el nombre del comprador </label>
            <input type="text" class="form-control" name="nomcomprador" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Ingresa el apellido paterno</label>
            <input type="text" class="form-control" name="apellidopeterno" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Ingresa el apellido materno</label>
            <input type="text" class="form-control" name="apellidomaterno" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Ingresa el telefono</label>
            <input type="text" class="form-control" name="telcomprador" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Ingresa el correo</label>
            <input type="text" class="form-control" name="correocomprador" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Ingresa la contraseña</label>
            <input type="text" class="form-control" name="passcomprador" required/>
        </div>
        <input type="submit" name="enviar" value="Insertar comprador" class="btn btn-primary">
    </form>
    <!--INICIO TABLA-->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">usuario</th>
            <th scope="col">nombre</th>
            <th scope="col">apellido paterno</th>
            <th scope="col">apellido materno</th>
            <th scope="col">telefono</th>
            <th scope="col">correo</th>
            <th scope="col">contraseña</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include('conec.php'); // Conexion a la bd
        $consulta = "SELECT * FROM comprador";

        $resultado =mysqli_query($conexion,$consulta);

        while($fila =mysqli_fetch_array($resultado)){
        ?>
        <tr>
        <th scope="row"> <?php echo $fila["usuario"] ?></th>
        <td> <?php echo $fila["nombre"] ?></td>
        <th scope="row"> <?php echo $fila["apellido_paterno"] ?></th>
        <td> <?php echo $fila["apellido_materno"] ?></td>
        <th scope="row"> <?php echo $fila["telefono"] ?></th>
        <td> <?php echo $fila["correo"] ?></td>
        <th scope="row"> <?php echo $fila["pass"] ?></th>
        </tr>
        <tr>
        <?php } ?>
    </tbody>
    </table>
</head>
<body>
    
</body>
</html>