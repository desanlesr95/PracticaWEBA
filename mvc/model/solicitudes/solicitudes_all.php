<?php 
	include_once "../model/conexion.php";
	$sql = $conn->prepare("SELECT usuarios.nombre,solicitudes.* FROM usuarios,solicitudes WhERE usuarios.id_usuario=solicitudes.id_solicitante OR usuarios.id_usuario=solicitudes.id_receptor ORDER BY status");
	$sql->execute();  

 ?>