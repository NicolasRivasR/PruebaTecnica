<?php 

include("conexionDB.php");

if($conexion){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $asunto = $_POST["asunto"];
    $comentarios = $_POST["comentarios"];
    
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






