<?php 
include_once "../model/conexion.php";
session_start();
$sql = $conn->prepare("SELECT * FROM solicitudes WHERE id_solicitante=? OR id_receptor=?");
$sql->bindParam(1,$_SESSION['id_usuario'],PDO::PARAM_INT);
$sql->bindParam(2,$_SESSION['id_usuario'],PDO::PARAM_INT);
$sql->execute();  
?>