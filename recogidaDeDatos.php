<?php 

include("conexionDB.php");

if($conexion){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $asunto = $_POST["asunto"];
    $comentarios = $_POST["comentarios"];
    
    echo "He recibido los siguietes datos: \n";
    echo $nombre . "\n";
    echo $email . "\n";
    echo $telefono. "\n";
    echo $asunto. "\n";
    echo $comentarios. "\n";

    $consulta = "INSERT INTO datos( nombre, email, telefono, asunto, comentarios) 
                 VALUES ('$nombre','$email','$telefono','$asunto','$comentarios')";

    $res = mysqli_query($conexion, $consulta);
    if($res){

        echo "Se ha enviado correctametne la consulta";

    }
    else{

        echo "Ha ocurrido un error al intentar enviar la consulta";

    }
}
else{

    echo "No ha sido posible conectarse a la base de datos";

}




?>






