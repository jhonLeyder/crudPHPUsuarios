<?php
    require 'database.php';
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $fecha = $_POST['fecha'];
    $profesion = $_POST['profesion'];
    $cedula = $_POST['cedula'];
    
    if(empty($nombre) && empty($edad) && empty($profesion) && empty($cedula)) { ?>
        <div class="alert alert-info text-center">
        <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Ingrese Los Datos Completos.</strong> 
        </div>
    <?php } else{
        $consulta = mysqli_num_rows(mysqli_query($con,"SELECT fecha FROM usuario WHERE cedula = '$cedula'")) ;
        if($consulta > 0 ) { ?>
            <div class="alert alert-info text-center">
                <button type="button" class="close" data-dismiss="alert">×</button>
                El Usuario <strong class="text-danger"><?php echo $nombre ?></strong> ya Esta Registrado.
            </div>
        <?php } else{ 
            $registroUsuario = mysqli_query($con,"INSERT INTO  usuario() VALUE (NULL,'$nombre','$edad','$profesion','$fecha','$cedula')");
        ?>
        <div class="alert alert-info text-center">
            <button type="button" class="close" data-dismiss="alert" onclick="recargarPagina()">×</button>
            <strong class="text-success">registro exitoso</strong>
        </div>
        <?php }
   };

