<?php
	try{
		$conn = new PDO('mysql:host=localhost;dbname=mvc', "root", "lendev");
		//$conn=new PDO($dsn,$user,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>

