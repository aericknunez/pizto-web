<?php 
include_once 'Alerts.php';


$alert = new Alerts();
//$alert->Alerta("error","Error!","Faltan Datos!");
//$alert->ResetAll();


// validando todos los campos
if($_POST["nombre"] == NULL){
$alert->Alerta("warning","Error!","El campo nombre esta vacio!");
} elseif($_POST["email"] == NULL){
$alert->Alerta("warning","Error!","El campo email esta vacio!");
} elseif ($_POST["mensaje"] == NULL) {
$alert->Alerta("warning","Error!","El campo mensaje esta vacio!");
} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  $alert->Alerta("warning","Error!","La direccion de correo electronico es invalido!");
} else {
	/// aqui ira todo el codigo para enviar el email

$destinatario = "aerick.nunez@gmail.com"; 
$asunto = 'Mensaje de ' . $_POST["nombre"] . ': Hibrido'; 
$cuerpo = ' 
<html> 
<head> 
   <title>' . $asunto . '</title> 
</head> 
<body> 
<h1>' . $_POST["nombre"] . '</h1>
<p> 
<b>Telefono: ' . $_POST["telefono"] . ' 
</p>
<p> 
<b>Empresa: ' . $_POST["empresa"] . ' 
</p>
<p> 
<b>Objeto de envio: ' . $_POST["extra"] . ' 
</p>
<p> 
<b>' . $_POST["mensaje"] . ' 
</p>Mensaje generado por ' . $_SERVER["SERVER_NAME"] . '
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: ". $_POST["nombre"] ." <". $_POST["email"] .">\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

//direcciones que recibián copia 
//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

//direcciones que recibirán copia oculta 
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

	if(mail($destinatario,$asunto,$cuerpo,$headers)){
		$alert->Alerta("success","Exito!","Mensaje Enviado Correctamente!");
		$alert->ResetAll();
	} else {
		$alert->Alerta("error","Error!","El mensaje no se ha podido enviar!");
	}



}



 ?>