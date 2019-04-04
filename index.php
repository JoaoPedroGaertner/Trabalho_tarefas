<?php	
			include "conexao.php";	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Trabalho_Tarefas</title>
		 <link rel="stylesheet" href="css.css">
		 <script>
			function aparecer(){
				document.getElementById('formulario').style.display = "block";
			}
		 </script>
	</head>
	<body>
	<?php
		include "cadastrar.php";
	?>
		<div id="menu">
			<h2>Gerenciar Tarefas</h2>
		</div>
		<div id="titulos">
	<!---------->
			<div id="fazer">
				<h3>A FAZER</h3>
				<p id="campo1"><?php echo "$descricao";?></p>
				<!--<input type="text" name="comentario" id="text1">-->
				<br><br>
				<input type="button" name="botao1" id="bot1" onclick="aparecer()" value="add nova tarefa"/>
			</div>
	<!---------->
			<div id="fazendo">
				<h3>FAZENDO</h3>
				<p id="campo2"><?php echo "$descricao";?></p>
				<!--<input type="text" name="comentario" id="text2">-->
				<br><br>
				<input type="button" name="botao1" id="bot2" value="add nova tarefa"/>
			</div>
	<!---------->
			<div id="feito">
				<h3>FEITO</h3>
				<p id="campo3">1</p>
				<!--<input type="text" name="comentario" id="text3">-->
				<br><br>
				<input type="button" name="botao1" id="bot3" value="add nova tarefa"/>
			</div>
		</div>
		
	</body>
</html>