<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

include_once 'application/common/Mysqli.php';
$db = new dbConn();

include_once 'application/common/Encrypt.php';

?>

<h1>Configuraciones Raiz</h1>
Datos Generales del Sistema
    <table class="table table-sm table-striped">

   <thead>
     <tr>
       <th>Item</th>
       <th>Configuraci&oacuten</th>
     </tr>
   </thead>

   <tbody>
    <?
$r = $db->select("*", "config_root", "where td = ".$_SESSION['td']."");
?>
<tr>
       <td>Expiraci&oacuten</td>
       <td><? echo Encrypt::Decrypt($r["expira"],$_SESSION['secret_key']) . " :: " . Encrypt::Decrypt($r["expiracion"],$_SESSION['secret_key']); ?></td>
       
     </tr>
     <tr>
       <td>Servidor FTP</td>
       <td><? echo Encrypt::Decrypt($r["ftp_servidor"],$_SESSION['secret_key']); ?></td>
       
     </tr>
     <tr>
       <td>FTP Path</td>
       <td><? echo Encrypt::Decrypt($r["ftp_path"],$_SESSION['secret_key']); ?></td>
       
     </tr>
     <tr>
       <td>FTP Ruta</td>
       <td><? echo Encrypt::Decrypt($r["ftp_ruta"],$_SESSION['secret_key']); ?></td>
       
     </tr>
     <tr>
       <td>FTP User</td>
       <td><? echo Encrypt::Decrypt($r["ftp_user"],$_SESSION['secret_key']); ?></td>
       
     </tr>
     <tr>
       <td>FTP Password</td>
       <td><? echo Encrypt::Decrypt($r["ftp_password"],$_SESSION['secret_key']); ?></td>
       
     </tr>
     <tr>
       <td>Tipo Sistema</td>
       <td><? if(Encrypt::Decrypt($r["tipo_sistema"],$_SESSION['secret_key']) == 1) echo "Basico";
              if(Encrypt::Decrypt($r["tipo_sistema"],$_SESSION['secret_key']) == 2) echo "Profesional";
              if(Encrypt::Decrypt($r["tipo_sistema"],$_SESSION['secret_key']) == 3) echo "Corporativo"; ?></td>
       
     </tr>
     <tr>
       <td>Plataforma</td>
       <td><? if(Encrypt::Decrypt($r["plataforma"],$_SESSION['secret_key']) == 1) echo "Web"; else echo "Local"; ?></td>
    
     </tr>
     <tr>
       <td>Numero de Pantallas</td>
       <td><? echo Encrypt::Decrypt($r["pantallas"],$_SESSION['secret_key']); ?></td>
    
     </tr>
<?
 unset($r);  
echo $_SESSION['root_tipo_sistema'];
   ?>
   </tbody>
</table>

<a href="?modal=conf_root" class="btn btn-indigo">Cambiar configuraciones<i class="fa fa-cog ml-2"></i></a>