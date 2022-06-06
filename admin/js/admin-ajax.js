$(document).ready(function(){
    $('#crear-admin').on('submit', function(e){
        e.preventDefault();

        var datos = $(this).serializeArray();

        //Creamos el llamado ajax
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data){
                var resultado = data;
                if(resultado.respuesta === 'exito'){
                    Swal(
                        'Correcto!',
                        'El administrador se creo correctamente',
                        'success'
                      )
                }else{
                    Swal(
                        'Error',
                        'Hubo un error',
                        'error'
                      )
                }
            }
        })
    });

    $('#login-admin').on('submit', function(e){
        e.preventDefault();

        var datos = $(this).serializeArray();

        //Creamos el llamado ajax
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data){
                var resultado = data;
                if(resultado.respuesta === 'exitoso'){
                    Swal(
                        'Login Correcto!',
                        'Bienvenid@'+resultado.usuario+ ' !! ',
                        'success'
                      )
                }else{
                    Swal(
                        'Error',
                        'Usuario o Password Incorrectos',
                        'error'
                      )
                }
            }
        })
    });
});