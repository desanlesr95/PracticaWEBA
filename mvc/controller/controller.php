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
		default:
			echo "Error en sistema";
			break;
	}
 ?>