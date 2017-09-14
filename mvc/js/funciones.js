function acceso() {
	$.ajax({
		type:"post",
		url:"model/acceso.php",
		data:$('#frm_login').serialize(),
		beforeSend:function(){
			$('#resulatdo').html("<img src='images/ajax.loader.gif' />");
		},
		success: function(resultado){
			console.log(resultado);
			console.log("ok");
			console.log((resultado=="ok"));
			if(resultado!="error"){
				console.log("si");
				location.href="view/home.php";
			}else{
				$("#resultado").html("Error de acceso!");			
			}
		},
		error:function(err){
			console.log(err);
		}
	});
}