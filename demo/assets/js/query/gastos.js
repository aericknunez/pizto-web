$(document).ready(function()
{

	$('#btn-gastos').click(function(e){ /// para el formulario
		e.preventDefault();
		$.ajax({
			url: "application/src/routes.php?op=28",
			method: "POST",
			data: $("#form-gastos").serialize(),
			success: function(data){
				$("#gastos").html(data);
				$("#form-gastos").trigger("reset");
			}
		})
	})
$("#form-gastos").keypress(function(e) {//Para deshabilitar el uso de la tecla "Enter"
if (e.which == 13) {
return false;
}
});



	$("body").on("click","#borrar-gasto",function(){
	var op = $(this).attr('op');
	var iden = $(this).attr('iden');
    	$.post("application/src/routes.php", {op:op, iden:iden}, 
    	function(htmlexterno){
		$("#gastos").html(htmlexterno);
   	 	});
	});


});