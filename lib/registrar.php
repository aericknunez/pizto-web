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
} elseif ($_POST["pass"] == NULL) {
$alert->Alerta("warning","Error!","El campo password esta vacio!");
} elseif ($_POST["pass"] != $_POST["pass2"]) {
$alert->Alerta("warning","Error!","Los password no son iguales!");
} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  $alert->Alerta("warning","Error!","La direccion de correo electronico es invalido!");
} else {
	/// aqui ira todo para insertar los datos


}

exit();

 ?>