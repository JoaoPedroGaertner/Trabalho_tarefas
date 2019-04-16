<?php	
		
			$id = "";
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
			
			include "conexao.php";
			$sql = "INSERT INTO tarefas (id,descricao,tipo,data,data_cadastro,dias)
			VALUES ('$id','$descricao','$tipo','$data','$data_cadastro','$dias')";
			$user = $connection -> prepare($sql);
			$user -> execute();
			$connection = NULL;
			
			echo"<script>
				window.history.back();
			</script>";
		
		
?>


<html>
	<head>
		<link rel="stylesheet" href="css.css">
		
	</head>
	<body>
		
	</body>
</html>
		
	