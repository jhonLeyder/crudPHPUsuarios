<?php 

    require 'database.php';
    $nombre = $_POST['nombreUsuario'];
    $edad = $_POST['edadUsuario'];
    $fecha = $_POST['fechaUsuario'];
    $profesion = $_POST['profesionUsuario'];
    $cedula = $_POST['cedulaUsuario'];

    $resultado = mysqli_query($con, "UPDATE usuario 
    SET nombre = '$nombre', edad = '$edad', profesion = '$profesion', fecha = '$fecha', cedula = '$cedula'
    WHERE cedula = '$cedula'");
    if(empty($resultado)){
?>
    <div class="alert alert-info text-center">
        <button type="button" class="close" data-dismiss="alert" onclick="recargarPagina()">×</button>
        <strong class="text-danger">Invalido</strong>
    </div>
<?php }else{ ?>
    <div class="alert alert-info text-center">
        <button type="button" class="close" data-dismiss="alert" onclick="recargarPagina()">×</button>
        <strong class="text-success">Actualizado</strong>
    </div>
<?php } ?>

