<?php 
class Alerts{

      public function __construct(){
        
      }


       public function Alerta($tipo,$encabezado,$texto){ 
       //tipo = warning , success , error , info , danger
        echo '<script>
        toastr.'.$tipo.'("'.$texto.'", "'.$encabezado.'", {
              "closeButton": true,
              "debug": false,
              "newestOnTop": true,
              "progressBar": false,
              "positionClass": "toast-top-center",
              "preventDuplicates": true,
              "onclick": null,
              "showDuration": 100,
              "hideDuration": 100,
              "timeOut": 2000,
              "extendedTimeOut": 1000,
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            });
        </script>';
        }

      public function ResetAll(){
       echo '<script>
        $("#form-contacto").trigger("reset"); 
        </script>';        
      }

      public function ResetReg(){
       echo '<script>
        $("#form-registro").trigger("reset"); 
        </script>';        
      }


}
 ?>