<?php 
include_once "../model/conexion.php";
//$status='CREADO';
$sql = $conn->prepare("SELECT * FROM solicitudes  ORDER BY status");
//$sql->bindParam(1,$status,PDO::PARAM_INT);
$sql->execute(); 

#Solo colaborador hace solicitudes
#los receptores solo son colaboradores
#responsale solo liasta las creadas
#el lider las acpatdas por el responsable 
 ?>