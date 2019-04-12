<?php
	
	$id = $_GET['id'];
	
    $sql = "SELECT * FROM tarefas where id = $id";
	include "conexao.php";
    $usere = $connection -> prepare($sql);
    $usere -> execute();
	
    foreach($usere as $a){
	}

    if(ISSET($_POST['salvar2'])){
        $descricao = $_POST['descricao'];
        $tipo = $_POST['tipo'];
        $data = $_POST['data'];



        $sql = "UPDATE tarefas 
        SET
        descricao = '$descricao',
        tipo = '$tipo',
        data = '$data'

        WHERE 
        id = '$id'";
 
        $usere = $connection -> prepare($sql);
        $usere -> execute();
        $connection = NULL;
		
		header("location:index.php");
	}

?>

<html>
	<head>
		<title>Trabalho_Tarefas</title>
		 <link rel="stylesheet" href="css.css">
	</head>
	<body>
		<div id="edt">
			<p><h2>Editar card</h2> </p>
			<form id='form1' action='' method='POST'>
					Descricao<br><textarea id="desc" name='descricao'  maxlength='50' placeholder=''><?php echo $a['descricao'];?></textarea><br><br>
					Tipo<br><select id="tip" name='tipo'>
						<option disabled selected>Selecione o estado </option>
						<option value='1'>A Fazer</option>
						<option value='2'>Fazendo</option>
						<option value='3'>Feito</option>
						</select><br><br>
				   Data<br><input type='date' name='data' class='formulario'/>
						<br><br>
				<input type='submit' id="enviar" name='salvar2' value='salvar'/><br><br>
			</form><br>
		</div>
	</body>
</html>