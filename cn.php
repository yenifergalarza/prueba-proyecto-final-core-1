<?php
$conexion = mysqli_connect("localhost","root","","bd-prueba");

if (!$conexion){
    echo 'error al conectare a la base de datos';
}

else{
    echo 'conectado a la base de datos';
}