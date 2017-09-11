function acceso() {
	$.ajax({
		type:"post",
		url:"model/acceso.php",
		data:$('#frm_login').serialize(),
		beforeSend:function(){
			$('#resulatdo').html("<img src='images/ajax.loader.gif' />");
		},
		success: function(resultado){
			if($.trim(resultado)==='ok'){
				location.reload(true);
			}else{
				$("#resultado").html("Error de acceso!");			}
		}
	});
	return false;
}