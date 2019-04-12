<?php
	try{
		$connection = new PDO("mysql:host=localhost;dbname=schoolcard_bd","root","");
	}
	catch (PDOException $e){
		echo $e ->getMessage();
	}
?>