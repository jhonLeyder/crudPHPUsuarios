<?php 

    require 'database.php';
    $cedula = $_POST['cedulaUsusario'];
    $resultado = mysqli_query($con,"DELETE FROM usuario WHERE cedula = '$cedula'");
    if($resultado){?>
        <div class="alert alert-danger text-center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong class="text-danger">El Usuario fue Eliminado</strong>
        </div>
    <?php }else{ ?>
        <div class="alert alert-info text-center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong class="text-danger">No se pudo Eliminar</strong>
        </div>
    <?php } ?>