<?php 
    require 'database.php';
    $cedula = $_POST['cedulaUsusario'];

    $resultado = mysqli_query($con,"SELECT * FROM usuario WHERE cedula = '$cedula'");
    $resultado = mysqli_fetch_row($resultado);
    echo json_encode($resultado);
?>