<?php
include("abre.php");

$Email = $_POST['email'];

$consulta = "INSERT INTO registro(email) VALUES 
('$Email')";

if($conexion->query($consulta) === TRUE){
   
}else{
    echo "Error" . $consulta . "<br>" .$conexion->error;
}

$conexion->close();
?>
