<?php
	try{
		$connection = new PDO("mysql:host=localhost;dbname=tarefas_bd","root","");
	}
	catch (PDOException $e){
		echo $e ->getMessage();
	}
?>