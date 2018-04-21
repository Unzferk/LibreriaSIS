function cargarformulario(arg){
//funcion que carga todos los formularios del sistema

		if(arg==1){ var url = "form_nueva_categoria"; }


		$("#contenido_principal").html($("#cargador_empresa").html());
		   
		    $.get(url,function(resul){
		        $("#contenido_principal").html(resul);

		    })
}


 $(document).on("submit",".form_entrada",function(e){

//funcion para atrapar los formularios y enviar los datos

       e.preventDefault();
        
        $('html, body').animate({scrollTop: '0px'}, 200);
        
        var formu=$(this);
        var quien=$(this).attr("id");
        
        if(quien=="f_nueva_categoria"){ var varurl="agregar_nueva_categoria"; var divresul="notificacion_resul_fanu"; }
   
        $("#"+divresul+"").html($("#cargador_empresa").html());

              $.ajax({

                    type: "POST",
                    url : varurl,
                    datatype:'json',
                    data : formu.serialize(),
                    success : function(resul){

                        $("#"+divresul+"").html(resul);
                        $('#'+quien+'').trigger("reset");

                    }

                });


})