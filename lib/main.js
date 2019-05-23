$(document).ready(function()
{

	$('#btn-contacto').click(function(e){ /// para el formulario
		e.preventDefault();
		$.ajax({
			url: "lib/contactar.php",
			method: "POST",
			data: $("#form-contacto").serialize(),
			success: function(data){
				$("#result").html(data);
			}
		})
	})


$("#form-contacto").keypress(function(e) {//Para deshabilitar el uso de la tecla "Enter"
if (e.which == 13) {
return false;
}
});




	$('#btn-registro').click(function(e){ /// para el formulario
		e.preventDefault();
		$.ajax({
			url: "lib/registrar.php",
			method: "POST",
			data: $("#form-registro").serialize(),
			success: function(data){
				$("#result").html(data);
			}
		})
	})


$("#form-registro").keypress(function(e) {//Para deshabilitar el uso de la tecla "Enter"
if (e.which == 13) {
return false;
}
});




});