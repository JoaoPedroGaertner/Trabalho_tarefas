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
        $tipo = $a['tipo'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Trabalho_Tarefas</title>
		 <link rel="stylesheet" href="css.css">
		 <link rel="stylesheet" href="pace.css">
		 <link href="/pace/themes/pace-theme-barber-shop.css" rel="stylesheet" />

		<!-- include alertify.css -->
		<link rel="stylesheet" href="css/alertify.css">

		<!-- include semantic ui theme  -->
		<link rel="stylesheet" href="css/themes/semantic.css">

		<!-- include alertify script -->
		<script src="Js/alertify.js"></script>
			
		 <script>
			function aparecer(){
				document.getElementById('formulario1').style.display = "block";
				
			}
			function aparecer2(){
				document.getElementById('formulario2').style.display = "block";
				
			}

			function comentarios(){
				document.getElementById('campo1').style.display = "block";
			}
			function comentar(){
				alertify.confirm("This is a confirm dialog.",
				  function(){
					alertify.success('Ok');
				  },
				  function(){
					alertify.error('Cancel');
				  });
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
		<br>
		<div id="titulos">
<!----fazer------>
			<div id="fazer">
				<h3>A FAZER</h3>
				<table border="2" style="width:100%; max-width:100%;">
					<tr>
						<th>Descrição</th>
						<th>Editar</th>
						<th>Excluir</th>
					</tr>
            <?php
                    echo "<tr>";
                    echo "<td>$descricao</td>";
                    echo "<td><img src='editar.png' name='editar' id='edit' onclick='aparecer2()' style='width:25px;'>
                    </a></td>";
                    echo "<td><img src='lixeira.png' name='excluir' id='ex' onclick='()' style='width:25px;'>
                    </a></td>";
                    echo "</tr>"; 
            ?>
				</table>
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
			
		</div>
<!---formulario 2------->		
			<div id="formulario2">
			
		</div>
	<script src="pace.js"></script>

	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
			<script type="text/javascript">
			$(document).ready(function(){
			$.ajax({
			url: 'cadastro.php',
			success: function(data) {
			$('#formulario1').html(data);
			},
			beforeSend: function(){
			},
			complete: function(){
			}
			});
			});
			
			$('#edit').click(function(){
			$.ajax({
			url: 'edita.php',
			success: function(data) {
			$('#formulario2').html(data);
			},
			beforeSend: function(){
			},
			complete: function(){
			}
			});
			});
			</script>
	</body>
</html>