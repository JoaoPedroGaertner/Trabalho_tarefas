<?php
	include "conexao.php";		
?>
<html>
	<head>
		
	</head>
	<body>
	<div id="formu1">
		<form id='form1' method='POST'>
		<p id='p1'><h2>Cadastrar novo card!</h2></p>
			<h3>Descrição<br><textarea name='descricao' class='formulario' id='desc' maxlength='40' placeholder=''></textarea></h3>
			<h3>Tipo<br><select id='tip' class='formulario' name='tipo'>
				<option disabled selected>Selecione o estado </option>
				<option value='1'>A Fazer</option>
				<option value='2'>Fazendo</option>
				<option value='3'>Feito</option>
				</select></h3>
			<h3>Data Final de entrega<br><input type='date' name='data' class='formulario'/></h3>
			<h3>Data atual<br><input type='date' name='data2' class='formulario'/></h3><br>

		
		<input type='submit' id='enviar' name='salvar' value='salvar' />	
		<br><br>
		</form><br>	
		<input type='button' id='enviar2' onclick="voltar()" name='voltar' value="Voltar"/>
	</div>
<script>
			$('#form1').submit(function(e){
				var info = $(this).serialize();
				e.preventDefault();
				$.ajax({
					type: "POST",
					url: "cadastrar.php",
					data: info,
					success: function(data){}
			})
			fazer();
			fazendo();
			feito();
				return false;
				
			})
			
			
		</script>
	</body>
</html>
