function actualizaDatos(){


	
	nombre=$('#NnomE').val();
	apellido=$('#NapeE').val();
	nom_usu=$('#Nnom_usuE').val();
	

	cadena= "id=" + id +
			"&Nnom=" + nombre + 
			"&Nape=" + apellido +
			"&Nnom_usu=" + email;

	$.ajax({
		type:"POST",
		url:"../pages/actualizar_perfil.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}
/*

function mostrarInputPersonalizado() {
	var select = document.getElementById("tip_mango");
	var inputPersonalizado = document.getElementById("campoPersonalizado");

	if (select.value === "personalizado") {
		inputPersonalizado.style.display = "block";
	} else {
		inputPersonalizado.style.display = "none";
	}
}*/
