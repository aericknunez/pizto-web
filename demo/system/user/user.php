<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

include_once 'application/common/Alerts.php';
include_once 'application/common/Mysqli.php';
include_once 'system/user/Usuarios.php';

$db = new dbConn();
?>
<h1>Usuarios
<?php 
if($_SESSION['tipo_cuenta'] == 1 or $_SESSION['tipo_cuenta'] == 2){
echo '<a href="?modal=registrar" class="btn-floating btn-sm blue-gradient"><i class="fa fa-user-plus"></i></a>';	
}

 ?>
 </h1>

<!-- informacion de eliminado -->
<div id="userinfo">
  <?php 
   Usuarios::VerUsuarios();
   ?>
</div> 
