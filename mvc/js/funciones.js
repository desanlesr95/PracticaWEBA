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
        if (opcion==102) {
            getUsers();
        }
    },    
    success: function(resultado){
        $("#page-body").html(resultado);        
    }
    });
}


function guardarUsuario(){
    $.ajax({
    type: "POST",
    url: "model/usuarios/guardarUsuario.php",
    data: $("#frm_registrar").serialize(),
    beforeSend: function(){
                $("#page-body").html("<img src='images/ajax-loader.gif'>");
    },    
    success: function(resultado){
        console.log(resultado);
        if ($.trim(resultado) === 'ok'){
                menu(102);
        }else{
            $("#page-body").html("Error de registro");
        }        
    }
    });    
    return false;
}

function getUsers(){
    var content;

    $.ajax({
    type: "POST",
    url: "model/usuarios/usuarios.php",
    data: [],
    beforeSend: function(){
        $("#page-body").html("<img src='images/ajax-loader.gif'>");
    },    
    success: function(resultado){
        content = JSON.parse(resultado);
        crearTabla();
    }
    });   
    function crearTabla() {
    var cod="";
    for(var i=0;i<content[0].length;i++){
        cod+="<tr>";
        cod+="<td>"+content[0][i]+"</td>";
        cod+="<td>"+content[1][i]+"</td>";
        cod+="<td>"+content[2][i]+"</td>";
        cod+="<td>"+content[3][i]+"</td>";
        cod+="<td>"+content[4][i]+"</td>";
        cod+="<td>"+botonStatus(content[5][i])+"</td>";
        cod+="<td><a onclick='edit("+content[6][i]+")' data-toggle='modal' data-target='#myModal'><i class='fa fa-pencil-square-o'></i></td>";
        cod+="</tr>";
    }

    $('#usuariosTable').html(cod); 
    }

    return false;
}

function botonStatus(status){
    if(status=='A'){
        return "<button type='button' class='btn btn-success'>Activo</button>";
    }
    else{
        return "<button type='button' class='btn btn-danger'>Inactivo</button>";
    }
}

function edit(id){
    var content;
    $.ajax({
    type: "POST",
    url: "model/usuarios/usuarioByID.php",
    data: {id_usuario:id},
    beforeSend: function(){
    },    
    success: function(resultado){
        content = JSON.parse(resultado);
        //console.log(resultado);
        console.log(content);
        $('#nombre').val(content.nombre);
        $('#apellidop').val(content.apellidop);
        $('#apellidom').val(content.apellidom);
        $('#id_rol').val(content.id_rol);
        $('#username').val(content.username);
        $('#id').val(content.id_usuario);
    }
    });   
}



function update(){
    console.log($("#frm_update").serialize());
    $.ajax({
    type: "POST",
    url: "model/usuarios/updateUsuario.php",
    data: $("#frm_update").serialize(),
    beforeSend: function(){
        $("#page-body").html("<img src='images/ajax-loader.gif'>");
    },    
    success: function(resultado){
        console.log(resultado);
        if ($.trim(resultado) === 'ok'){
              menu(102);  
        }else{
            $("#page-body").html("Error de registro");
        }        
    }
    });    
    return false;
}
