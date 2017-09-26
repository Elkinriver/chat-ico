<?php
$conexion = mysqli_connect("localhost", "root", "", "chat-ico");
if($conexion){
}
else{
    echo"No se pudo conectar la base de datos";
}