<?php

$conexion = new mysqli("localhost","id19866439_viridianarr", "ConexionesChidas1.", "id19866439_conexiones");
if($conexion){
    echo "Conexion exitosa";
}
else{
    echo "Error";
}
?>