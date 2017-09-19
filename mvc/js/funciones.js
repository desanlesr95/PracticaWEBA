function acceso(){
    $.ajax({
    type: "POST",
    url: "model/acceso.php",
    data: $("#frm_login").serialize(),
    beforeSend: function(){
                $("#resultado").html("<img src='images/ajax-loader.gif'>");
    },    
    success: function(resultado){
        if ($.trim(resultado) === 'ok'){
                location.reload(true);
        }else{
                $("#resultado").html("Error de Acceso!");
        }        
    }
    });    
    return false;
}

function menu(opcion){
	$.ajax({
    type: "POST",
    url: "controller/controller.php",
    data: {opt_form: opcion},
    beforeSend: function(){
        $("#page-body").html("<img src='images/ajax-loader.gif'>");
    },    
    success: function(resultado){
        $("#page-body").html(resultado);        
    }
    });
}