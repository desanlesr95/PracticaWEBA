<?php
	$dbname="mvc";
	$user="root"
	$password="";
	$host="localhost";
	//$port="3306";
	$dsn="mysql:host=$host;dbname=$dbname";
	try{
		$conn=new PDO($dsn,$user,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo $e->getMessage();
	}

