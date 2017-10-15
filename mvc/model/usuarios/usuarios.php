<?php 
include_once "../model/conexion.php";
$sql = $conn->prepare("select * from usuarios");
$sql->execute();  
//echo json_encode($row);
?>