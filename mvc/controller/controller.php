<?php 
	$op=$_POST['opt_form'];
	switch ($op) {
		case '101':
			include_once '../model/usuarios/nuevo_usuario.php';
			break;
		case '102':
			include_once '../model/usuarios/lista_usuarios.php';
			break;
		case '103':
			include_once '../model/usuarios/grafica_usuarios.php';
			break;
		case '201':
			include_once '../model/solicitudes/nueva_solicitud.php';
			break;
		case '202':
			include_once '../model/solicitudes/lista_solicitudes.php';
			break;
		case '203':
			break;
		default:
			echo "Error en sistema";
			break;
	}
 ?>