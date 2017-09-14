<?php
	include_once 'conexion.php';
	session_start();
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$sql=$conn->prepare("SELECT * from usuarios where username=? and contrasena=?");
	$sql->bindParam(1,$user,PDO::PARAM_STR);
	$sql->bindParam(2,md5($pass),PDO::PARAM_STR);
	$sql->execute();
	$row= $sql->fetch();
	//var_dump($row);
	if($row){
		$_SESSION['conectado']=1;
		$_SESSION['id_usuario']=$row['id_usuario'];
		echo "ok";
	}else{
		$_SESSION['conectado']=0;
		echo "error"; 	
	}
 ?>