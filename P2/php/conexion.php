<?php
include("abre.php");

$Nombre = $_POST['nombre'];
$Organizacion = $_POST['organizacion'];
$Email = $_POST['email'];
$Asunto = $_POST['asunto'];
$Mensaje = $_POST['mensaje'];

$consulta = "INSERT INTO contactos(nombre, organizacion, email, asunto, mensaje) VALUES 
('$Nombre','$Organizacion','$Email','$Asunto','$Mensaje')";

if($conexion->query($consulta) === TRUE){
   
}else{
    echo "Error" . $consulta . "<br>" .$conexion->error;
}

$conexion->close();
?>