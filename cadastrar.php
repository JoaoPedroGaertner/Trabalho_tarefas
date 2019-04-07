<?php
		session_start();
		if(ISSET($_POST['salvar'])){
			$id = "";
			$nome = $_POST['nome'];
			$descricao = $_POST['descricao'];
			$tipo = $_POST['tipo'];
		
			include "conexao.php";
			$sql = "INSERT INTO tarefas 
			VALUES (?,?,?,?)";
			$user = $connection -> prepare($sql);
			$user -> execute(array($id,$nome,$descricao,$tipo));
			$connection = null;
		}
		
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Trabalho_Tarefas</title>
		 <link rel="stylesheet" href="css.css">
		 <script type="text/javascript" href="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
		 <script>
			function comentarios(){
				document.getElementById('campo1').style.display = "block";
			}
			
		 </script>
	</head>
	<body>
		
	</body>
</html>