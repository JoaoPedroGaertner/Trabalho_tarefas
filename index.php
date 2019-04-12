<?php	
	
				
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Trabalho_Tarefas</title>
		 <link rel="stylesheet" href="css.css">
		 <link rel="stylesheet" href="pace.css">
		 <link rel="stylesheet" href="microtip.css">
		<link href="/pace/themes/pace-theme-barber-shop.css" rel="stylesheet" /> 
		
		<!-- include alertify.css -->
		<link rel="stylesheet" href="css/alertify.css">

		<!-- include semantic ui theme  -->
		<link rel="stylesheet" href="css/themes/semantic.css">

		<!-- include alertify script -->
		<script src="Js/alertify.js"></script>
		<script>
			function comentarios(){
				alertify.success('Cadastrado com sucesso!');
			}

			function aparecer(){
				document.getElementById('formulario1').style.display = "block";
				document.getElementById('enviar2').style.display = "block";
				
			}	
			function voltar(){
				document.getElementById('formulario1').style.display = "none";
				document.getElementById('enviar2').style.display = "none";
			}
			function comentar2(id){
				
				var ids = id;
				var dados = {ids:ids}
				alertify.confirm('Excluir o card '+ids,
				  function(){
					alertify.success('Ok');
					$.post('excluir.php',dados,function(retorna){
						
					
					});
					
				  },
				  function(){
					alertify.error('Cancel');
				  });
				 } 
			
			</script>
					
	 
	</head>
	<body >
<?php
	include "cadastrar.php";
	// include "calculo.php";
	// include "editar.php";
	// include "excluir.php"
?>	
		<div id="menu">
			<center><a aria-label='Adicionar um novo card' data-microtip-position='up' role='tooltip'>
			<input type="button" name="botao1" id="bot1" onclick="aparecer()" value="ADD NOVO CARD" /></a>
			<input type='button' id='enviar2' name='voltar'  onclick='voltar()' value="Voltar" style="display:none;"/></center><br>
			
			<div id="formulario1">
			
			</div>
		</div>
		<br>
		<div id="titulos">
		
<!----fazer------>
			<div id="fazer">
				<h3>A FAZER</h3>
				<table border="1" class="tabelas">
					<tr>
						<th>Descrição</th>
						<th class="tab">Editar</th>
						<th class="tab">Excluir</th>
						<th class="tab">Dias Restantes</th>
					</tr>
            <?php
					include "conexao.php";	
					$sql = "SELECT * FROM tarefas";
					$usere = $connection -> prepare($sql);
					$usere -> execute();
					$connection = NULL;
					
                    foreach($usere as $a){
					$id = $a['id'];
					$descricao = $a['descricao'];
					$tipo = $a['tipo'];
					$dias = $a['dias'];
					
					
					if($tipo == '1'){
					echo "<tr>";
                    echo "<td>$descricao</td>";
                    echo "<td><a href='editar.php?id=$id&descricao=$descricao' aria-label='Editar' data-microtip-position='up' role='tooltip'>
					<img src='editar.png' id='edit' name='editar'  style='width:25px;'>
                    </a></td>";
                    echo "<td>
					<button class='exclu' onclick='comentar2($id)' aria-label='Excluir' data-microtip-position='up' role='tooltip'>
					<img src='lixeira.png' name='excluir' id='ex'  style='width:25px;'>
					</button>
                    </td>";
					echo "<td>$dias</td>";
					// echo "<td><a href='calculo.php?id=$id'><img src='editar.png' id='edit' name='editar'  style='width:25px;'></a></td>";
                    echo "</tr>"; 
					}
					}
            ?>
				</table>
				<br><br>
				
			</div>
<!----fazendo------>
			<div id="fazendo">
				<h3>FAZENDO</h3>
				<table border="1" class="tabelas">
					<tr>
						<th>Descrição</th>
						<th class="tab">Editar</th>
						<th class="tab">Excluir</th>
						<th class="tab">Dias Restantes</th>
					</tr>
            <?php
			
				include "conexao.php";	
					$sql = "SELECT * FROM tarefas";
					$usere = $connection -> prepare($sql);
					$usere -> execute();
					$connection = NULL;
					
                    foreach($usere as $a){
					$id = $a['id'];
					$descricao = $a['descricao'];
					$tipo = $a['tipo'];
					$dias = $a['dias'];
	
					if($tipo == '2'){
					echo "<tr>";
                    echo "<td>$descricao</td>";
                    echo "<td><a href='editar.php?id=$id&descricao=$descricao' aria-label='Editar' data-microtip-position='up' role='tooltip'>
					<img src='editar.png' id='edit' name='editar'  style='width:25px;'>
                    </a></td>";
                    echo "<td>
					<button class='exclu' onclick='comentar2($id)' aria-label='Excluir' data-microtip-position='up' role='tooltip'>
					<img src='lixeira.png' name='excluir' id='ex'  style='width:25px;'>
					</button>
					</td>";
					echo "<td>$dias</td>";
                    echo "</tr>"; 
					}
					}
            ?>
				</table>
				<br><br>
				
			</div>
<!---feito------->
			<div id="feito">
				<h3>FEITO</h3>
				<table border="1" class="tabelas">
					<tr>
						<th>Descrição</th>
						<th class="tab">Editar</th>
						<th class="tab">Excluir</th>
						<th class="tab">Dias Restantes</th>
					</tr>
            <?php
                   include "conexao.php";	
					$sql = "SELECT * FROM tarefas";
					$usere = $connection -> prepare($sql);
					$usere -> execute();
					$connection = NULL;
					
                    foreach($usere as $a){
					$id = $a['id'];
					$descricao = $a['descricao'];
					$tipo = $a['tipo'];
					$dias = $a['dias'];
	
					if($tipo == '3'){
					echo "<tr>";
                    echo "<td><a'>$descricao</a></td>";
                    echo "<td><a href='editar.php?id=$id&descricao=$descricao' aria-label='Editar' data-microtip-position='up' role='tooltip'>
					<img src='editar.png' id='edit' name='editar'  style='width:25px;'>
                    </a></td>";
                    echo "<td>
					<button class='exclu' onclick='comentar2($id)' aria-label='Excluir' data-microtip-position='up' role='tooltip'>
					<img src='lixeira.png' name='excluir' id='ex'  style='width:25px;'>
					</button>
                    </a></td>";
					echo "<td>$dias</td>";
                    echo "</tr>"; 
					}
					}
            ?>
				</table>
				<br><br>
				
			</div>
		</div>
		<br>
		
		

	<script src="pace.js"></script>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
			<script type="text/javascript">
			$('#bot1').click(function(){
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
			
			</script>
	</body>
</html>