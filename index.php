<?php 

$nombre = $_GET["nombre"];
$email = $_GET["email"];
$telefono = $_GET["telefono"];
$asunto = $_GET["asunto"];
$comentarios = $_GET["comentarios"];

echo "He recibido los siguietes datos: \n";
echo $nombre . "\n";
echo $email . "\n";
echo $telefono. "\n";
echo $asunto. "\n";
echo $comentarios. "\n";
?>

<!DOCTYPE html>
<html lang="es">

<link rel="stylesheet" href="styles.css">

<body>

   <h2> Contacta con nosotros</h2>

    <form action="recogidaDeDatos.php">

        <input type="text" name= "nombre"> 

        <input type="email" name= "email"> 

        <input type="tel" name = "telefono"> 

        <input type="text" name = "asunto"> 

        <input type="text" name = "comentarios"> 

        <input type="checkbox" >

        <input type="submit">

    </form>

</body>