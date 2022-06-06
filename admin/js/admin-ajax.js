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
                if(resultado.respuesta == 'exito'){
                    swal(
                        'Correcto!',
                        'El administrador se creo correctamente',
                        'success'
                      )
                }else{
                    swal(
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
                if(resultado.respuesta == 'exitoso'){
                    swal(
                        'Login Correcto!',
                        'Bienvenid@'+resultado.usuario+ ' !! ',
                        'success'
                      )
                      setTimeout(function(){
                        window.location.href = 'admin-area.php';
                      }, 2000);
                }else{
                    swal(
                        'Error',
                        'Usuario o Password Incorrectos',
                        'error'
                      )
                }
            }
        })
    });
});