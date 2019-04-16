<?php

	include "conexao.php";



			
?>
<html>
	<head>
		
	</head>
	<body>
	
		<form id='form1' method='POST'>
		<p id='p1'><h2>Cadastrar novo card!</h2></p>
			Descrição<br><textarea name='descricao' id='desc' maxlength='40' placeholder=''></textarea><br><br>
			Tipo<br><select id='tip' name='tipo'>
				<option disabled selected>Selecione o estado </option>
				<option value='1'>A Fazer</option>
				<option value='2'>Fazendo</option>
				<option value='3'>Feito</option>
				</select><br><br>
			Data Final de entrega<br><input type='date' name='data' class='formulario'/><br><br>
			Data atual<br><input type='date' name='data2' class='formulario'/><br><br>

		
		<input type='submit' id='enviar' name='salvar'  value='salvar' />	
		<br><br>
	</form><br>	


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
