<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
</head>

<body>
  
    <form action="" id="form">

        <h2> Contacta con nosotros</h2>

        <div>
            <input type="text" name= "nombre" placeholder="Nombre *"> 
        </div>
        
        <div>
            <input type="email" name= "email" placeholder="Email *"> 

        </div>

        <div>
            <input type="tel" name = "telefono" placeholder="Teléfono"> 

        </div>
        <div>
            <input type="text" name = "asunto" placeholder="Asunto"> 
        </div>

        <div>
            <input type="text" name = "comentarios" placeholder="Comentarios *"> 
        </div>

        <div>  
            <input type="checkbox" >
            <label for="aceptar_terminos">He leido y acepto la politíca de privacidad</label>
        </div>
        <div>    <input type="submit" id="Enviar">  </div>

    </form>
    
    <div id="respuesta"> </div>
</body>

<script>

    $('#Enviar').click( function(){
        console.log("Boton pulsado");
        $.ajax({
            url: 'recogidaDeDatos.php',
            type: 'POST',
            data: $('#form').serialize(),
        })
        .done( function(res){

                $('respuesta').html(res);

        })
        .fail(function(res){

            $('respuesta').html(res);

        });

    })

</script>