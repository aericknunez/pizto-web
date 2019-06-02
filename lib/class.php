<?php 
/**
 * aqui va la calse para registrar
 */
class Register {
	
	function __construct(){
		# code...
	}



	public function InsertarPass($password, $username, $email) {
			$db = new dbConn();

			$password = hash('sha512', $password);

			$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
        	$password = hash('sha512', $password . $random_salt);

        	if (strlen($password) == 128) {

        		    $datos = array();
        		    $datos["username"] = $username;
				    $datos["email"] = $email;
				    $datos["password"] = $password;
				    $datos["salt"] = $random_salt;
				    if ($db->insert("login_members", $datos)) {
				       return TRUE;
				    } 
        	}
        	else{
        		return FALSE;
        	}


	}

	public function ProcesaPass($pass1, $pass2, $username, $email) {
		if($pass1 == $pass2){
			if(strlen($pass1) > 6){
				if($this->MayusCount($pass1) > 0) {
					if($this->NumCount($pass1) > 0) {
						if($this->InsertarPass($pass1, $username, $email) == TRUE){
							return TRUE;
						} else {
							return FALSE;
						}
					} else { Alerts::Alerta("error","Error!","Debe contener al menos un numero!"); } 
					
				} else {
					Alerts::Alerta("error","Error!","Debe tener al manos una Mayuscula!");
				}

				
			}
			else { 
				Alerts::Alerta("error","Error!","El password debe tener mas de 6 Caracteres!");
			}
			
		} else {
			Alerts::Alerta("error","Error!","Los password no son iguales!");
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



	function GetUser($user){ 
		$nombre = explode(" ",$user);
		return  strtolower($nombre[0] . $nombre[1] . date("dmy"));
	}




	function GetUltimoTd(){
		$db = new dbConn();
	    if ($r = $db->select("td", "login_userdata", "order by id DESC LIMIT 1")) { 
	        $ultimotd=$r["td"];
	    } 
	    unset($r); 
		return $ultimotd;

	}















}


 ?>