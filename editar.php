<?php
	
	$id = $_GET['id'];
	
    $sql = "SELECT * FROM tarefas where id = $id";
	include "conexao.php";
    $usere = $connection -> prepare($sql);
    $usere -> execute();
	
    foreach($usere as $a){
		$id = $a['id'];
		$descricao = $a['descricao'];
		$tipo = $a['tipo'];
		$dias = $a['dias'];
		$data = $a['data'];
		$data_cadastro = $a['data_cadastro'];
	}

    if(ISSET($_POST['salvar2'])){
        $descricao = $_POST['descricao'];
        $tipo = $_POST['tipo'];
        $data = $_POST['data'];
        $data_cadastro = $_POST['data2'];	
		
		
		$data1 = $_POST['data'];
		$data2 = $_POST['data2'];
			
			// converte as datas para o formato timestamp
			
			$d1 = strtotime($data1); 
			$d2 = strtotime($data2);
			
			// verifica a diferença em segundos entre as duas datas e divide pelo número de segundos que um dia possui
			
			$dataFinal = ($d2 - $d1)/86400 ;
			
			// caso a data 2 seja menor que a data 1
			
			if($dataFinal < 0)
			$dataFinal = $dataFinal * -1;
			
		$dias = $dataFinal;


        $sql = "UPDATE tarefas 
        SET
        descricao = '$descricao',
        tipo = '$tipo',
        data = '$data',
        data_cadastro = '$data_cadastro',
        dias = '$dias'

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
			<p><h1>Editar card</h1> </p>
			<form id='form2' action='' method='POST'>
					<h3>Descrição<br><textarea name='descricao' class='formulario' id='desc' maxlength='40'><?php echo $a['descricao'];?></textarea></h3>
			<h3>Tipo<br><select id='tip' class='formulario' name='tipo'>
				<option disabled selected>Selecione o estado </option>
				<option value='1'>A Fazer</option>
				<option value='2'>Fazendo</option>
				<option value='3'>Feito</option>
				</select></h3>
			<h3>Data Final de entrega<br><input type='date' name='data' class='formulario'value="<?php echo $a['data']?>"/></h3>
			<h3>Data atual<br><input type='date' name='data2' class='formulario'value="<?php echo $a['data_cadastro']?>"/></h3><br>
					
				<input type='submit' id="enviar" name='salvar2' value='salvar'/><br><br>
			</form><br>
		</div>
	</body>
</html>