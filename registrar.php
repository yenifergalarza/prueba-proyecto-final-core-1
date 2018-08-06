<?php
include 'cn.php';
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];

//consulta para insertar
$insertar = "INSERT INTO usuarios(nombre,apellidos,correo,usuario,clave,telefono) VALUE ('$nombre','$apellidos','$correo','$usuario','$clave','$telefono')";


$verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario ='$usuario'");
if (mysqli_num_rows($verificar_usuario)> 0 ){
    echo 'el usuario ya esta registrado ';
    exit;
} 

$verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo ='$correo'");
if (mysqli_num_rows($verificar_correo)> 0 ){
    echo 'el correo ya esta registrado ';
    exit;
} 







// ejecuta consulta
$resultado = mysqli_query($conexion,$insertar);
if (!$resultado){
    echo  'error al registrarse';
   }
    else {
        echo 'usuario registrado exitosamente';
    exit;
    }

//cerrar la conexop
mysqli_close($conexion);   
