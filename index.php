<!DOCTYPE html>
<html lang="es">

<head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario de contacto</title>
</head>

<body>
  
    <form action="" id="form">

        <h1 class= "header"> Contacta con nosotros</h1>

        <div class="form-group">
            <input type="text" name= "nombre" id = "nombre" placeholder="Nombre *" required> 

            <input type="email" name= "email" id = "email" placeholder="Email *" required> 

        </div>

        <div class="form-group">
            <input type="tel" name = "telefono" placeholder="Teléfono"> 

            <input type="text" name = "asunto" placeholder="Asunto"> 
        </div>

        <div >
            <textarea name="comentarios" id ="comentarios"  class= "comentarios" required placeholder="Comentarios *"></textarea>
        </div>

        <div class = "check">  
            <input type="checkbox" id="aceptar_terminos" >
            <label for="aceptar_terminos">He leído y acepto la <span>politíca de privacidad</span></label>
        </div>
        <div>    <input type="submit" id="Enviar" class="button">  </div>

    </form>
    
    <div class="rep" id="respuesta"> </div>
</body>

<script>


    $('#Enviar').click( function(){

        event.preventDefault();

        let isValid = true;
        let errorMsg = "";

        if($('#nombre').val().trim() == "" || $('#email').val().trim() == "" || $('#comentarios').val().trim() == "" ){

            isValid = false;
            errorMsg += "Se deben rellenar los campos marcados con asteriscos \n";
        }

        if(!$('#aceptar_terminos').is(':checked')) {

            isValid = false;
            errorMsg += "Debes de aceptar la política de privacidad"
        }

        if(!isValid){

            alert(errorMsg);

        }
        else{
            $.ajax({
                url: 'recogidaDeDatos.php',
                type: 'POST',
                data: $('#form').serialize(),
            })
            .done( function(res){

                    $('#respuesta').html(res);

            })
            .fail(function(){

                $('#respuesta').html("ha ocurrido un error");

            });
        }

 



    })

</script>