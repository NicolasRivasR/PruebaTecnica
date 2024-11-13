<!DOCTYPE html>
<html lang="es">

<head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Revisar lo de la fuente-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
  
    <form action="" id="form">

        <h2> Contacta con nosotros</h2>

        <div>
            <input type="text" name= "nombre" id = "nombre" placeholder="Nombre *" required> 
        </div>
        
        <div>
            <input type="email" name= "email" id = "email" placeholder="Email *" required> 

        </div>

        <div>
            <input type="tel" name = "telefono" placeholder="Teléfono"> 

        </div>
        <div>
            <input type="text" name = "asunto" placeholder="Asunto"> 
        </div>

        <div>
            <input type="text" name = "comentarios" id ="comentarios" placeholder="Comentarios *" required> 
        </div>

        <div>  
            <input type="checkbox" id="aceptar_terminos" >
            <label for="aceptar_terminos">He leido y acepto la politíca de privacidad</label>
        </div>
        <div>    <input type="submit" id="Enviar">  </div>

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