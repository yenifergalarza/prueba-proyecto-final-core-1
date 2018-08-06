<?php
$destino =$_POST["correo"];
$nombre = $_POST;
$correo="visita-a-un-amigo@hotmail.com";
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\ntelefono:".$telefono."\nMensaje: ".$mensaje;
 mail($destino,"Contacto", $contenido);
 header("Location: index.html");

                                                            ?>