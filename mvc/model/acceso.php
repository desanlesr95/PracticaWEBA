<?php
	include_once 'conexion.php';
	$sql="select * from usuarios where username=? and contrasena=?";
	$result=$var->execute();
	if($result->num_rows > 0){
		while(){
			$_SESSION['conectado']=1;
			$_SESSION['id_usuario']=$row['id_usuario'];
		}
	}else{
		$_SESSION['conectado']=0;
		echo "error"; 	
	}
 ?>