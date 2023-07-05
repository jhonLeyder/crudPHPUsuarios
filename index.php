<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="/styles/style.css" type="text/css">
  <title>Formulario</title>
  <style>
    .btn1 {
      --blue: black;
      font-size: 15px;
      padding: 0.7em 2.7em;
      letter-spacing: 0.06em;
      position: relative;
      font-family: inherit;
      border-radius: 0.6em;
      overflow: hidden;
      transition: all 0.3s;
      line-height: 1.4em;
      border: 2px solid var(--blue);
      background: linear-gradient(to right, rgba(27, 253, 156, 0.1) 1%, transparent 40%,transparent 60% , rgba(27, 253, 100, 0.1) 100%);
      color: var(--green);
      box-shadow: inset 0 0 10px rgba(27, 253, 156, 0.4), 0 0 9px 3px rgba(27, 253, 156, 0.1);
    }

    .btn1:hover {
      color: blue;
      box-shadow: inset 0 0 10px rgba(27, 253, 156, 0.6), 0 0 9px 3px rgba(27, 253, 156, 0.2);
    }

    .btn1:before {
      content: "";
      position: absolute;
      left: -4em;
      width: 4em;
      height: 100%;
      top: 0;
      transition: transform .4s ease-in-out;
      background: linear-gradient(to right, transparent 1%, rgba(27, 253, 156, 0.1) 40%,rgba(27, 253, 156, 0.1) 60% , transparent 100%);
    }

    .btn1:hover:before {
      transform: translateX(15em);
    }

    /*Boton 2 */
    .bnt2 {
      --color: #cd1d24;
      font-family: inherit;
      display: inline-block;
      width: 8em;
      height: 2.6em;
      line-height: 2.5em;
      margin: 5px;
      position: relative;
      overflow: hidden;
      border: 2px solid var(--color);
      transition: color .5s;
      z-index: 1;
      font-size: 10px;
      border-radius: 6px;
      font-weight: 500;
      color: var(--color);
    }

    .bnt2:before {
      content: "";
      position: absolute;
      z-index: -1;
      background: var(--color);
      height: 150px;
      width: 200px;
      border-radius: 50%;
    }

    .bnt2:hover {
      color: #fff;
    }

    .bnt2:before {
      top: 100%;
      left: 100%;
      transition: all .7s;
    }

    .bnt2:hover:before {
      top: -30px;
      left: -30px;
    }

    .bnt2:active:before {
      background: #0038af;
      transition: background 0s;
    }

    /*Boton 3*/
    .bnt3 {
      --color: #0038AF;
      font-family: inherit;
      display: inline-block;
      width: 8em;
      height: 2.6em;
      line-height: 2.5em;
      margin: 5px;
      position: relative;
      overflow: hidden;
      border: 2px solid var(--color);
      transition: color .5s;
      z-index: 1;
      font-size: 10px;
      border-radius: 6px;
      font-weight: 500;
      color: var(--color);
    }

    .bnt3:before {
      content: "";
      position: absolute;
      z-index: -1;
      background: var(--color);
      height: 150px;
      width: 200px;
      border-radius: 50%;
    }

    .bnt3:hover {
      color: #fff;
    }

    .bnt3:before {
      top: 100%;
      left: 100%;
      transition: all .7s;
    }

    .bnt3:hover:before {
      top: -30px;
      left: -30px;
    }


    /* input */
    .group {
    position: relative;
    }

    .input {
    font-size: 16px;
    padding: 10px 10px 10px 5px;
    display: block;
    width: 200px;
    border: none;
    border-bottom: 1px solid #515151;
    background: transparent;
    }

    .input:focus {
    outline: none;
    }

    label {
    color: #999;
    font-size: 18px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: 5px;
    top: 10px;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
    }

    .input:focus ~ label, .input:valid ~ label {
    top: -20px;
    font-size: 14px;
    color: #5264AE;
    }

    .bar {
    position: relative;
    display: block;
    width: 200px;
    }

    .bar:before, .bar:after {
    content: '';
    height: 2px;
    width: 0;
    bottom: 1px;
    position: absolute;
    background: #5264AE;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
    }

    .bar:before {
    left: 50%;
    }

    .bar:after {
    right: 50%;
    }

    .input:focus ~ .bar:before, .input:focus ~ .bar:after {
    width: 50%;
    }

    .highlight {
    position: absolute;
    height: 60%;
    width: 100px;
    top: 25%;
    left: 0;
    pointer-events: none;
    opacity: 0.5;
    }

    .input:focus ~ .highlight {
    animation: inputHighlighter 0.3s ease;
    }

    @keyframes inputHighlighter {
    from {
      background: #5264AE;
    }

    to {
      width: 0;
      background: transparent;
    }
    }
  </style>

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="#" class="navbar-brand">Usuarios</a>
    <ul class="navbar-nav ml-auto">
      <form class="form-inline my-2 my-lg-0">
        <input type="search" id="busqueda" name="busqueda" class="form-control mr-sm-2" placeholder="Buscar Usuario"/>
        <div class="btn btn-success my-2 my-sm-0">
          Buscar
        </div>
      </form>
    </ul>
  </nav>

  <!-- muesta alertas -->
  <div class="p-2 m-0 row justify-content-center text-center">
    <div style="width: 50%;" id="resultado"></div>
  </div>

  <div class="container p-4">
    <div class="row">
      <div class="col-md-5">
        <div class="card">
          <div class="card-body">
            <form id="formulario">
              <div class="form-grop">
                <input type="text" name="nombre" placeholder="Nombre" class="form-control" />
              </div>
              <br />
              <div class="form-grop">
                <input type="text" name="edad" placeholder="Edad" class="form-control" />
              </div>
              <br />
              <div class="form-grop">
                <input type="text" name="profesion" placeholder="Profesion" class="form-control" />
              </div>
              <br />
              <div class="form-grop">
                <?php $fecha = date("Y-m-d")?>
                <input type="date" name="fecha" class="form-control" value="<?php echo $fecha ?>" />
              </div>
              <br />
              <div class="form-grop">
                <input type="text" name="cedula" class="form-control" placeholder="Cedula" />
              </div>
              <br />
              <div class="row justify-content-center">
                <button type="button" onclick="add()" class="btn1  p-2">Guardar Usuario</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-7">
        <table class="table table-bordered table-sm">
          <thead class="table-dark">
            <th>Nombre</th>
            <th>Edad</th>
            <th>Profesion</th>
            <th>Fecha</th> 
            <th>Cedula</th>
            <th class="text-center"><i class="fas fa-trash-alt" style="color: #da0707; cursor:pointer;"></i></th>
            <th class="text-center"><i class="fas fa-user-edit" style="color: #0038AF; cursor:pointer"></i></th>
          </thead>
          <?php
          require 'database.php';
          $query = "SELECT * FROM usuario";
          $resul = mysqli_query($con, $query);
          ?>
          <tbody>
            <?php foreach ($resul as $key) { ?>
              <tr>
                <td> <?php echo $key['nombre'] ?></td>
                <td> <?php echo $key['edad'] ?></td>
                <td> <?php echo $key['profesion'] ?></td>
                <td> <?php echo $key['fecha'] ?></td>
                <td> <?php echo $key['cedula'] ?></td>
                <td> <button class="bnt2 m-0" data-toggle="modal" data-target="#eliminarusuario">Eliminar</button></td>
                <td><button type="button" data-toggle="modal" class="bnt3 m-0" data-target="#actualizar" onclick="usuario(<?php echo $key['cedula'] ?>)">Actualizar</button></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
<?php require 'modal.php' ?>
<script src="logica.js"></script>
</html>