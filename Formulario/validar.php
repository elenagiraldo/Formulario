<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulario</title>
</head>

<body>
<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];
$mensaje = $_POST['mensaje'];

if ($nombre == "") {
	echo "El campo nombre es obligatorio"."<br/>";
}else if ($apellido == "") {
	echo "El campo apellido es obligatorio"."<br/>";
}else if ($email == "") {
	echo "El campo email es obligatorio"."<br/>";
}else if ($password == "") {
	echo "El campo contraseña es obligatorio"."<br/>";
}else if ($mensaje == "") {
	echo "El campo mensaje es obligatorio"."<br/>";
}else{
	
	$destino = "andrew78@misena.edu.co";
	$cambiarApellido = strtolower($apellido);
	$cambiarNombre = strtolower($nombre);
	$enviado = ucwords($cambiarNombre)." ".ucwords($cambiarApellido)." ". "ha enviado un mensaje.\n";
	$enviado .= "Su correo es $email y su mensaje es:\n";
	$enviado .=$mensaje;
	
	//Encabezados para validar el mensaje.
	$headers .= "From ".$_POST['email']."\r\n";
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type:text/html; charset=UTF-8\r\n";
	
	
	$asunto = ucwords($cambiarNombre)." ".ucwords($cambiarApellido)." ". "ha enviado un mensaje.\n";
	if(mail($destino,$asunto,$enviado,$headers)){
		echo "Datos enviados correctamente";
		}else{
			echo "Error en el envío de datos";
			}

}

/*
$estado_civil = $_POST['estado_civil'];

if ($estado_civil==""){
	echo "El campo estado civil es obligatorio"."<br/>";
	}else 
	echo "Su estado civil es: $estado_civil"."<br/>";
	
	
$nacionalidad = $_POST['nacionalidad'];

if($nacionalidad ==""){
	echo "El campo nacionalidad es obligatorio"."<br/>";
	}else{
	echo "Su nacionalidad es: ".$nacionalidad."<br/>";
	}

$pasatiempos = $_POST['pasatiempos'];
if($pasatiempos ==""){
	echo "Seleccione un pasatiempo"."<br/>";
	}
	echo "La cantidad de pasatiempos es: ".count($pasatiempos)."<br/>";
	echo "Sus pasatiempos son: ";
	foreach ($pasatiempos as $hobbies){
		echo $hobbies." ";
		}
*/
?>
</body>
</html>
