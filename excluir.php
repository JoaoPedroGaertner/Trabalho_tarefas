<?php
    
    
    $ids = filter_input(INPUT_POST, 'ids', FILTER_SANITIZE_STRING);

    
		$sql = "DELETE FROM tarefas WHERE id = $ids";
		include "conexao.php";
		$usere = $connection -> prepare($sql);
		$usere -> execute();
		$connection = NULL;
		
		// header("Location: index.php");

?>

<html>
	<head>
		
	</head>
	<body>
		
	</body>
</html>
