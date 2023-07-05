$(document).ready(function(){
    let url = 'buscarUsuario.php';
    $("#busqueda").keyup('change', function () {	
        let nombre = $("#busqueda").val();
        if(nombre){
            $.ajax({
                url: url,
                type:'POST',
                data: {nombre},
                success: function(response){
                    $("#resultado").html(response);
                },
            });
        }else{
            $("#resultado").html("");
        }
    });

});

//Agregar usuario.
function add(){
    let url = 'agregarUsuario.php';
    $.ajax({
        url: url,
        type:'POST',
        data: $("#formulario").serialize(),
        success: function(response){
            $("#resultado").html(response);
        },
    });
};

//Eliminar usuario
function eliminar(cedulaUsusario){
    let url = 'eliminarUsuario.php';
    $.ajax({
        url: url,
        type: 'POST',
        data: {cedulaUsusario},
        success: function(respuesta){
            $("#resultado").html(respuesta);
        },
    });
};

//Actualizar datos del usuario.
function actualizarUsuario(){
    let url = 'actualizarUsuario.php';
    $.ajax({
        url: url,
        type: 'POST',
        data: $('#formularioUsuario').serialize(),
        success: function(respuesta){

            $("#resultado").html(respuesta);
        },
    });
};

//Consultar un unico usuario.
function usuario(cedulaUsusario){
   
    let url = 'usuario.php';
    $.ajax({
        url: url,
        type: 'POST',
        data: {cedulaUsusario},
        success: function(respuesta){
            let datos = JSON.parse(respuesta);
            $("#nombreUsuario").val(datos[1]);
            $("#edadUsuario").val(datos[2]);
            $("#profesionUsuario").val(datos[3]);
            $("#fechaUsuario").val(datos[4]);
            $("#cedulaUsuario").val(datos[5]);
        },
    });
};

function recargarPagina() {
    location.reload();
}
  