<?php 
include_once "../conexion.php";
$id_usuario=$_POST['id_usuario'];
$sql = $conn->prepare("select * from usuarios where id_usuario=?");
$sql->bindParam(1,$id_usuario,PDO::PARAM_STR);
$sql->execute();  
$row;
if ($sql->rowCount() > 0 ){   
  while($rows = $sql->fetch(PDO::FETCH_ASSOC)){
      $row=$rows;
  }
}
echo json_encode($row);

 ?>