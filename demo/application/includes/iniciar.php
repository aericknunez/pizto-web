<?
include_once '../common/Helpers.php';
include_once 'variables_db.php';
include_once 'db_connect.php';
include_once 'functions.php';
sec_session_start();
include_once '../common/Encrypt.php';
include_once '../common/Mysqli.php';
include_once '../common/Alerts.php';
include_once '../common/Fechas.php';
include_once '../../system/corte/Corte.php';
include_once '../../system/sync/Sync.php';
include_once '../../system/index/Inicio.php';
include_once '../../system/config_configuraciones/Config.php';

if($_SESSION['username'] == NULL){
header("location: logout.php");
exit();
}

if (login_check($mysqli) == true) {

$user=sha1($_SESSION['username']);

	function UserInicio($user){
        $db = new dbConn();
            if ($r = $db->select("*", "login_userdata", "WHERE user = '$user' limit 1")) { 
            $_SESSION['nombre'] = $r["nombre"];
            $_SESSION['tipo_cuenta'] = $r["tipo"];
            $_SESSION['tkn'] = $r["tkn"];
            $_SESSION['avatar'] = $r["avatar"];
            $_SESSION['user'] = $user;
            $_SESSION['td'] = $r["td"];
            $_SESSION['secret_key'] = md5($r["td"]);

            } unset($r);

        
        $configuracion = new Config;
        $configuracion->CrearVariables(); // creo el resto de variables del sistema


        // reviso si hay una BD que actualizar
        $archx = "../../sync/" . $_SESSION['td'] . ".sql";

        if (file_exists($archx)) {
            $sql = explode(";",file_get_contents($archx));//
            foreach($sql as $query){
            $arr = $db->query($query);
            }
            unlink($archx);
        }
        //////////////
        $inicia = new Inicio;
        $inicia->CompruebaIconos("../iconos/", NULL); // creo iconos si no exite el archivo
               
       $inicia->Caduca(); // revisa si ha caducado
       BuscaRespaldo(); // revisa sy hay respaldos imcompletos

	       if(Helpers::ServerDomain() == TRUE and $_SESSION['tipo_cuenta'] != 1){ // registro entrada en web
	       	@$inicia->RegisterInOut(1);
	       }   
       }



    function BuscaRespaldo(){
        
        $sync = new Sync;
        $corte = new Corte;        
        $fechas = new Fechas;

        $dia=5;
        for ($x = 1; $x <= $dia; $x++) {
                $dias = $fechas->DiaResta(date("d-m-Y"),$x);
             // sin no hay corte, no hay respaldo y si hay datos  
             if($sync->BuscaRespaldo($dias) == 0 and $corte->BuscaCorte($dias) == 0 and $sync->VerificarDatos($dias) == "Si"){
                header("location: ../../?respaldos&msj");
             } else {
                header("location: ../../");
             }
         }   
        

    }


UserInicio($user);

}
?>