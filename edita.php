<?php
	include "conexao.php";		
?>

		<div id="edt">
			<p><h2>Editar card</h2> </p>
			<form id='form3' method='POST'>
					Descricao<br><textarea id="desc" name='descricao' class='formulario' maxlength='50' placeholder=''><?php echo $a['descricao'];?></textarea><br><br>
					Tipo<br><select id='tip' name='tipo'class='formulario'>
						<option disabled selected>Selecione o estado </option>
						<option value='1'>A Fazer</option>
						<option value='2'>Fazendo</option>
						<option value='3'>Feito</option>
						</select><br><br>
						
					Data Final de entrega<br><input type='date' name='data' class='formulario' value="<?php echo $a['data']?>"/><br><br>
					Data atual<br><input type='date' name='data2' class='formulario' value="<?php echo $a['data_cadastro']?>"/><br><br>
					
				<input type='submit' id="enviar" name='salvar2' value='salvar'/><br><br>
			</form><br>
		</div>
		
		<script>
			$('#form3').submit(function(e){
				var info2 = $(this).serialize();
				e.preventDefault();
				$.ajax({
					type: "POST",
					url: "editar.php",
					data: info2,
					success: function(data){}
			})
			fazer();
			fazendo();
			feito();
				return false;
				
			})
			
			
		</script>
		
