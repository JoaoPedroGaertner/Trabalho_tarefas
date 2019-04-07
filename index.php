<?php	
	include "conexao.php";	
			
	
	$sql = "SELECT * FROM tarefas";
	$user = $connection -> prepare($sql);
    $user -> execute();
	$connection = null;
	
	foreach($user as $a){
        $id = $a['id'];
        $nome = $a['nome'];
        $descricao = $a['descricao'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Trabalho_Tarefas</title>
		 <link rel="stylesheet" href="css.css">
		 <script>
			function aparecer(){
				document.getElementById('formulario1').style.display = "block";
				
			}
			function esconder(){
				// document.getElementById('formulario1').style.display = "none";
				// document.getElementById('formulario2').style.display = "none";
			}
			function comentarios(){
				document.getElementById('campo1').style.display = "block";
			}
		 </script>
	</head>
	<body onload="esconder()">
	<?php
		include "cadastrar.php";
		include "editar.php";
	?>
		<div id="menu">
			<h2>Gerenciar Tarefas</h2>
		</div>
		<div id="titulos">
<!----fazer------>
			<div id="fazer">
				<h3>A FAZER</h3>
				<table border="2" style="width:100%;">
					<tr>
						<th>Descrição</th>
						<th>Editar</th>
						<th>Excluir</th>

					</tr>
            <?php
                    echo "<tr>";
                    echo "<td>@$descricao</td>";
                    echo "<td><a href='editar.php?id=$id' title='Editar $nome'>
                    <img src='editar.png' style='width:25px;'>
                    </a></td>";
                    echo "<td><a href='?id=$id&nome=$nome' title='Excluir $nome'>
                    <img src='lixeira.png' style='width:25px;'>
                    </a></td>";
                    echo "</tr>"; 
            ?>
			</table>
				<!--<input type="text" name="comentario" id="text1">-->
				<br><br>
				<input type="button" name="botao1" id="bot1" onclick="aparecer()" value="add nova tarefa"/>
			</div>
<!----fazendo------>
			<div id="fazendo">
				<h3>FAZENDO</h3>
				<p id="campo2">1</p>
				<!--<input type="text" name="comentario" id="text2">-->
				<br><br>
				<input type="button" name="botao1" id="bot2" value="add nova tarefa"/>
			</div>
<!---feito------->
			<div id="feito">
				<h3>FEITO</h3>
				<p id="campo3">1</p>
				<!--<input type="text" name="comentario" id="text3">-->
				<br><br>
				<input type="button" name="botao1" id="bot3" value="add nova tarefa"/>
			</div>
		</div>
<!---formulario 1------->
		<div id="formulario1">
			<form id="form" action="#" method="POST">
				Nome<br><input type="text" name="nome"  id="nome" placeholder=""/><br><br>
				<textarea name="descricao"  maxlength="10" placeholder=""></textarea><br><br>
				Tipo<br><select name="tipo"/>
					<option disabled selected>Selecione o estado </option>
					<option value="1">A Fazer</option>
					<option value="2">Fazendo</option>
					<option value="3">Feito</option>
					</select>
				<br><br>
				<!--Data de Nascimento<br> <input type="date" required name="dataNascimento"/><br><br>-->
			
				<input type="submit" name="salvar" value="salvar" onclick="comentarios()"/><br><br>
			</form><br>
		</div>
<!---formulario 2------->		
			<div id="formulario2">
			<form id="form" action="#" method="POST">
				Nome<br><input type="text" name="nome"  id="nome" placeholder=""/><br><br>
				Descricao<br><input type="text" name="descricao"  placeholder=""/><br><br>
				Tipo<br><select name="tipo"/>
					<option disabled selected>Selecione o estado </option>
					<option value="1">A Fazer</option>
					<option value="2">Fazendo</option>
					<option value="3">Feito</option>
					</select>
				<br><br>
				<!--Data de Nascimento<br> <input type="date" required name="dataNascimento"/><br><br>-->
			
				<input type="submit" name="salvar" value="salvar"/><br><br>
			</form><br>
		</div>
	</body>
</html>