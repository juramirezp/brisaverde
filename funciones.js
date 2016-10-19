(function(){
    $(".boton_envio").click(function() {
 
        var nombre = $(".nombre").val();
            email = $(".email").val();
            validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
            telefono = $(".telefono").val();
            mensaje = $(".mensaje").val();
 
            $('.ajaxgif').removeClass('hide');
            var datos = 'nombre='+ nombre + '&email=' + email + '&telefono=' + telefono + '&mensaje=' + mensaje;
            $.ajax({
                type: "POST",
                url: "proceso.php",
                data: datos,
                success: function() {
                    $('.ajaxgif').hide();
                    $('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300);  
                },
                error: function() {
                    $('.ajaxgif').hide();
                    $('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '130px' }, 300);                 
                }
            });
    });
})();
