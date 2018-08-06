function validar(){
    let nombre = "";
    let apellidos ="";
    let correo ="";
    let usuario ="";
    let clave = "";
    let telefono ="";
    let expresion ="";
    nombre =document.getElementById("nombre").value;
    apellidos =document.getElementById("apellidos").value;
    correo =document.getElementById("correo").value;
    usuario =document.getElementById("usuario").value;
    clave =document.getElementById("clave").value;
    telefono =document.getElementById("telefono").value;


expresion = /\w+@+\w+\.+[a-z]/;


    if(nombre === "" || apellidos === "" || correo === ""|| usuario === ""|| clave === "" || telefono ==="" ){
        alert("Todos los campos son requeridos");
         return false;
    }
    else if (nombre.length>30){
        alert("nombre muy largo");
        return false;
    }
    else if (apellidos.length>80){
        alert("apellido muy largo");
        return false;
    }

else if (correo.length>100){
    alert(" correo muy largo");
    return false;  
}
else if (!expresion.test(correo)){
    alert("el correo no es valido");
    return false;
}

    else if (usuario.length>20 || clave.length>20){
        alert(" u y c deben tener 20 como max");
        return false;
    }
    else if (telefono.length>10){
        alert("telef muy largo");
        return false;}
        if (isNaN(telefono)){
            alert("no niumero");
            return false;    
}
    
