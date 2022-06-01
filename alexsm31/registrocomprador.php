<?php

include('conec.php');
if(isset($_POST['enviar'])){

    $usucomprador = $_POST ['usucomprador'];
    $nomcomprador = $_POST ['nomcomprador'];
    $apellidopaterno = $_POST ['apellidopaterno'];
    $apellidomaterno = $_POST ['apellidomaterno'];
    $telcomprador = $_POST ['telcomprador'];
    $correocomprador = $_POST ['correocomprador'];
    $passcomprador = $_POST['passcomprador'];

    $insertarComprador = "INSERT INTO comprador (usuario,nombre,apellido_paterno,apellido_materno,telefono,correo,pass) VALUE ('$usucomprador','$nomcomprador','$apellidopaterno','$apellidomaterno','$telcomprador','$correocomprador','$passcomprador')";
    $resultado = mysqli_query ($conexion,$insertarComprador);

    if(!$resultado){
        echo '<script>alert("Los datos se insertaron")</script>';
    }
    else{
        echo '<script>alert("Los datos si se insertaron")</script>';
    }
}
header('Location: comprador.php');
?>