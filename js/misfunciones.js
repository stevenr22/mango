/*function agregardatos(nombre,apellido,nombre_usu,rol){
    cadena = "nombre=" + nombre +  
            "&apellido=" + apellido +
            "&nombre_usu=" + nombre_usu +
            "&rol=" + rol
    $.ajax({
        type:"POST",
        url:"../pages/agregarDatos.php",
        data:cadena,
        success:function(r){
            if(r==1){
                alertify.success("Agregado con exito");
            }else{
                alertify.error("Fallo");
            }
        }

    });
}*/

/*function actualizar(datos){
    cadena = "nombre=" + nombre +  
        "&apellido=" + apellido +
        "&nombre_usu=" + nombre_usu
    
        $('Nnom').val();
        $('Nape').val();
        $('Nnom_usu').val();

        $.ajax({
            type:"POST",
            url:"../pages/actualizar_datos.php",
            data:cadena,
            success:function(r){
                if(r==1){
                    alertify.success("Agregado con exito");
                }else{
                    alertify.error("Fallo");
                }
            }
    
        });


      
}*/



function mostrardatos(datos){
    //0 = id, 1=nombreusuario, 2=nombre, 3=apellido, 4=rol

    d = datos.split('/');

    $('#id_Emp').val(d[0]);
    $('#NnomE').val(d[2]);
    $('#NapeE').val(d[3]);
    $('#Nnom_usuE').val(d[1]);
    $('#NrolE').val(d[4]);
}