<?php
    require 'database.php';
    $nombre = $_POST['nombre'];
    $resultado = mysqli_query($con,"SELECT * FROM usuario WHERE nombre LIKE '%$nombre%'");
    $contador = 1;
?>   
<div class="col-ms-8" style="width: 100%;">
    <table class="table table-bordered table-sm">
        <thead class="table-dark">
            <tr>
                <th> # </th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Profesion</th>
                <th>Fecha</th>
                <th>Cedula</th>
                <th class="text-center"><i class="fas fa-trash-alt" style="color: #da0707; cursor:pointer;"></i></th>
                <th class="text-center"><i class="fas fa-user-edit" style="color: #0038AF; cursor:pointer"></i></th>
            </tr>
        </thead>
    <tbody>
    <?php foreach($resultado as $key => $value) {?>
        <tr>
            <th><?php echo $contador++ ?></th>
            <td><?php echo $value['nombre']?></td>
            <td><?php echo $value['edad']?></td>
            <td><?php echo $value['profesion']?></td>
            <td><?php echo $value['fecha']?></td>
            <td><?php echo $value['cedula']?></td>
            <td> <button class="bnt2 m-0" data-toggle="modal" data-target="#eliminarusuario">Eliminar</button></td>
            <td><button type="button" data-toggle="modal" class="bnt3 m-0" data-target="#actualizar" onclick="usuario(<?php echo $value['cedula'] ?>)">Actualizar</button></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>
</div>


