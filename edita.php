
<?php

	include "conexao.php";
	include "cadastrar.php";


echo "<form id='form' action='#' method='POST'>
				Nome<br><input type='text' name='nome'  id='nome' placeholder=''/><br><br>
				<textarea name='descricao'  maxlength='40' placeholder=''></textarea><br><br>
				Tipo<br><select name='tipo'>
					<option disabled selected>Selecione o estado </option>
					<option value='1'>A Fazer</option>
					<option value='2'>Fazendo</option>
					<option value='3'>Feito</option>
					</select>
			
				<input type='submit' name='salvar' value='salvar'/><br><br>
			</form><br>";
			
?>
