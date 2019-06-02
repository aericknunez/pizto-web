<?php 
class Usuarios{
	public $password;
	public $pass1;
	public $pass2;

	function TerminarUsuario($nombre,$tipo,$user){
	    $db = new dbConn();

	$datos = array();
    $datos["nombre"] = $nombre;
    $datos["tipo"] = $tipo;
    $datos["user"] = $user;
    $datos["tkn"] = 1;
    $datos["avatar"] = "1.png";
    $datos["td"] = $_SESSION['td'];
    if ($db->insert("login_userdata", $datos)) {
        unset($_SESSION['newuser']);
        echo '<h2>Usuario agregado con exito!</h2>';
        echo '<a href="?user" class="btn btn-cyan">Terminar...</a>';
   		 } 
		$db->close();
	}

	function ActualizarUsuario($nombre,$tipo,$user){
	    $db = new dbConn();

	    	    $cambio = array();
			    $cambio["nombre"] = $nombre;
			    $cambio["tipo"] = $tipo;
			    if ($db->update("login_userdata", $cambio, "WHERE user='$user'")) {
			    Alerts::Alerta("success","Actualizado","Usuario Actualizado");
			    } else {
			    Alerts::Alerta("error","Error!","Error al actualizar!");
			    }

	}


	function CambiarAvatar($avatar,$user){
	    $db = new dbConn();

	    	    $cambio = array();
			    $cambio["avatar"] = $avatar;
			    if ($db->update("login_userdata", $cambio, "WHERE user='$user'")) {
			    Alerts::Alerta("success","Actualizado","Usuario Actualizado");
			    echo '<img src="assets/img/avatar/'.$avatar.'" class="img-fluid rounded-circle hoverable mx-auto d-block" alt="alt="avatar mx-auto white">';
			     
			     if($_SESSION["user"] == $user) { $_SESSION["avatar"] = $avatar; }

			    } else {
			    Alerts::Alerta("error","Error!","Error al actualizar!");
			    }

	}



	public function CambiarPass($password) {
			$db = new dbConn();

			$password = hash('sha512', $password);

			$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
        	$password = hash('sha512', $password . $random_salt);

        	if (strlen($password) == 128) {
	        	$cambio = array();
			    $cambio["password"] = $password;
			    $cambio["salt"] = $random_salt;
			    if ($db->update("login_members", $cambio, "WHERE username = '".$_SESSION["username"]."'")) {

			    	Alerts::Alerta("success","Password Cambiado","Pasword cambiado correctamente!");
			    }
			    else {
			    	Alerts::Alerta("error","Error!","Error! no se ha podido cambiar");
			    }
        	}
        	else{
        		Alerts::Alerta("error","Error!","Error desconocido!");
        	}


	}

	public function CompararPass($pass1, $pass2) {
		if($pass1 == $pass2){
			if(strlen($pass1) > 6){
				if($this->MayusCount($pass1) > 0) {
					if($this->NumCount($pass1) > 0) {
						$this->CambiarPass($pass1);
					} else { echo "Debe contener al menos un numero"; } 
					
				} else {
					echo "Debe tener al manos una Mayuscula";
				}

				
			}
			else { 
				echo "El password debe tener mas de 6 Caracteres";
			}
			
		} else {
			echo "Los password no son iguales";
		}

	}

	function MayusCount($string){
	    $string = preg_match_all('/([A-Z]{1})/',$string,$foo);
	    return $string;
	}


	function NumCount($string){
	    $string = preg_match_all('/([0-9]{1})/',$string,$foo);
	    return $string;
	}



	public function EliminarUsuario($iden, $username) {
			$db = new dbConn();
			
			if ( $db->delete("login_members", "WHERE id='$iden'")) {
        	
        		if ( $db->delete("login_userdata", "WHERE user='$username'")) {
	        	
	        	$this->VerUsuarios();
	     	Alerts::Alerta("success","Usuario Eliminado","Usuario eliminado correctamente!");
	    		} 
    		} 
	}


	public function VerUsuarios(){
	$db = new dbConn();

	$a = $db->query("SELECT * FROM login_members WHERE id != 1");
	if($a->num_rows > 0){
		echo '<table class="table table-sm">
			  <thead>
			    <tr>
			      <th scope="col">Nombre </th>
			      <th scope="col">Email</th>
			      <th scope="col">Cuenta</th>
			      <th scope="col">Eliminar</th>
			      <th scope="col">Editar</th>
			      <th scope="col">Avatar</th>
			    </tr>
			  </thead>
			  <tbody>';
	}
    foreach ($a as $b) {
    	$user=sha1($b["username"]);
    	
    	if ($r = $db->select("*", "login_userdata", "WHERE user = '$user'")) { 
       	$nombre = $r["nombre"]; $tipo = $r["tipo"];
    	} unset($r); 




    	if(($_SESSION["user"] == $user) or ($_SESSION["tipo_cuenta"]!= 5)){

    	echo '<tr>';
		
		echo '<th scope="row">'.$nombre.'</th>
		      <td>'.$b["email"].'</td>
		      <td>'.Helpers::UserName($tipo).'</td>';

			if($_SESSION["user"] == $user or $_SESSION["tipo_cuenta"] == 1  or $_SESSION["tipo_cuenta"] == 2){
				echo '<td><a id="deluser" op="2" iden="'.$b["id"].'" username="'.$user.'" class="btn-floating btn-sm"><i class="fa fa-trash red-text"></i></a></td>';
			} else {
				echo '<td><a class="btn-floating btn-sm"><i class="fa fa-trash grey-text"></i></a></td>';
			}

			if($_SESSION["user"] == $user or $_SESSION["tipo_cuenta"] == 1  or $_SESSION["tipo_cuenta"] == 2){
				echo '<td><a href="?modal=register_success&user='.$b["username"].'&op=actualizar" class="btn-floating btn-sm"><i class="fa fa-edit red-text"></i></a></td>';
			} else {
				echo '<td><a class="btn-floating btn-sm"><i class="fa fa-edit grey-text"></i></a></td>';
			}

			if($_SESSION["user"] == $user or $_SESSION["tipo_cuenta"] == 1  or $_SESSION["tipo_cuenta"] == 2){
				echo '<td><a href="?modal=avatar&user='.$b["username"].'" class="btn-floating btn-sm"><i class="fa fa-user red-text"></i></a></td>';
			} else {
				echo '<td><a class="btn-floating btn-sm"><i class="fa fa-user grey-text"></i></a></td>';
			}

		echo '</tr>';  
	}


    } $a->close();
    echo '</tbody>
		</table>';


	}






}