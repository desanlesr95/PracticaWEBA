<?php 
include_once "../conexion.php";
$sql = $conn->prepare("select * from usuarios");
$sql->execute();  
$row=[];
$i=0;
$nombres=[];
$apellidop=[];
$apellidom=[];
$id_rol=[];
$username=[];
$status=[];
$html;

if ($sql->rowCount() > 0 ){   
  while($rows = $sql->fetch(PDO::FETCH_ASSOC)){
      $nombres[$i]=$rows['nombre'];
      $apellidop[$i]=$rows['apellidop'];
      $apellidom[$i]=$rows['apellidom'];
      $id_rol[$i]=$rows['id_rol'];
      $username[$i]=$rows['username'];
      $status[$i]=$rows['status'];
      $i++;
  }
}
$row[0]=$nombres;
$row[1]=$apellidop;
$row[2]=$apellidom;
$row[3]=$id_rol;
$row[4]=$username;
$row[5]=$status;
echo json_encode($row);
?>