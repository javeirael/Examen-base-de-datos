<?php

include('../conec.php');

$codigofabricante = $_GET['id'];

$eliminarfabricante = "DELETE FROM fabricante
WHERE codigo = '$codigofabricante'";

$resultado=mysqli_query($conexion, $eliminarfabricante);

header ('Location: ../fabricantes.php');

?>