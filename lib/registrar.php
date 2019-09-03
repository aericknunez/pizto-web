<?php 
// no olvidar cambiar la conexion a demo
include_once '../demo/application/common/Alerts.php';
$alert = new Alerts();
include_once '../demo/application/common/Helpers.php';
include_once '../demo/application/includes/variables_db.php';
include_once '../demo/application/common/Mysqli.php';
$db = new dbConn();

include_once '../demo/application/common/Encrypt.php';
include_once '../demo/application/common/Fechas.php';

include_once 'class.php';
$clase = new Register();

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


$username = $clase->GetUser($_POST["nombre"]); // crea un username del nombre
$idtd = $clase->GetUltimoTd() + 1;
$_SESSION['secret_key'] = md5($idtd);
$expira = Fechas::DiaSuma(date("d-m-Y"),30);

if($_SESSION["tiposistemanew"] == NULL){ // selecciono vatiable tipo sistema
	$tsis = 3;
} else {
	$tsis = $_SESSION["tiposistemanew"];
}

	if($clase->ProcesaPass($_POST["pass"], $_POST["pass2"], $username, $_POST["email"]) == TRUE){ // se inserto el registro
		     	
		     	// inserta datos en root
		     	$datosr = array();
			    $datosr["expira"] = Encrypt::Encrypt($expira,$_SESSION['secret_key']);
			    $datosr["expiracion"] = Encrypt::Encrypt(Fechas::Format($expira),$_SESSION['secret_key']);
			    $datosr["tipo_sistema"] = Encrypt::Encrypt($tsis,$_SESSION['secret_key']);
			    $datosr["plataforma"] = Encrypt::Encrypt(1,$_SESSION['secret_key']);
			    $datosr["pantallas"] = Encrypt::Encrypt(1,$_SESSION['secret_key']);
			    $datosr["td"] = $idtd;
				$db->insert("config_root", $datosr);
		     	// inserta datos en config
		     	$datom = array();
			    $datom["sistema"] = "Sistema de control " . $_POST["nombre"];
			    $datom["propietario"] = $_POST["nombre"];
			    $datom["imp"] = 0;
			    $datom["propina"] = 0;
			    $datom["email"] = $_POST["email"];
			    $datom["imagen"] = "default.png";
			    $datom["logo"] = "pizto.png";
			    $datom["skin"] = "grey-skin";
			    $datom["tipo_inicio"] = 1;
			    $datom["inicio_tx"] = 1;
			    $datom["otras_ventas"] = 1;
			    $datom["venta_especial"] =1;		    
			    $datom["td"] = $idtd;
				$db->insert("config_master", $datom);
		     	// inserta datos en user data
		     	$datos = array();
			    $datos["nombre"] = $_POST["nombre"];
			    $datos["tipo"] = 5;
			    $datos["user"] = sha1($username);
			    $datos["tkn"] = 1;
			    $datos["avatar"] = "11.png";
			    $datos["td"] = $idtd;
				    if ($db->insert("login_userdata", $datos)) {
				    	unset($_SESSION["tiposistemanew"]); // elimino la variable tipo sistema
				        echo '<script>
							window.location.href="./demo/?iniciar"
						</script>';
				    } else {
						$alert->Alerta("warning","Error!","Ocurrio un error desconocido!");
					}
		}	else {
			$alert->Alerta("error","Error!","Ocurrio un error desconocido grave!");
		} 



}

exit();

 ?>