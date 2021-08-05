<?php
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

echo"<p>MENSAJE ENVIADO CORRECTAMENTE!</p>";
echo"<p>DATOS INGRESADOS</p>";

echo "NOMBRE: $nombre";
echo "<br>APELLIDO: $apellido";
echo "<br>EMAIL: $email";
echo "<br>MENSAJE: $mensaje";

echo"<br><a href=\"../index.php?s=home\">HAZ CLICK AQUÍ PARA VOLVER AL INICIO.</a>";
?>