<?php
		session_start();
		if(ISSET($_POST['salvar'])){
			$id = "";
			$nome = $_POST['nome'];
			$descricao = $_POST['descricao'];
		
			include "conexao.php";
			$sql = "INSERT INTO tarefas 
			VALUES (?,?,?)";
			$user = $connection -> prepare($sql);
			$user -> execute(array($id,$nome,$descricao));
			$connection = null;
		}
		
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Trabalho_Tarefas</title>
		 <link rel="stylesheet" href="css.css">
		 <script>
			// function comentarios(){
				// document.getElementById('campo1').style.display = "block";
			// }
		 </script>
	</head>
	<body>
		<div id="formulario">
			<form action="#" method="POST">
				Nome<br><input type="text" name="nome"  id="nome" placeholder=""/><br><br>
				descricao<br><input type="text" name="descricao"  placeholder=""/><br><br>
				<!--Data de Nascimento<br> <input type="date" required name="dataNascimento"/><br><br>-->
			
				<input type="submit" name="salvar" value="salvar" onclick="comentarios()"/><br><br>
			</form><br>
		</div>
	</body>
</html>