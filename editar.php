<?php
	
	$id = POST['id'];
	
	include "conexao.php";
    $sql = "SELECT * FROM tarefas where id=$id";
    $user = $connection -> prepare($sql);
    $user -> execute();

    foreach($user as $a){}
        
    if(ISSET($_POST['salvar'])){
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $tipo = $_POST['tipo'];


        $sql = "UPDATE tarefas 
        SET
        nome = '$nome',
        descricao = '$descricao',
        tipo = '$tipo',

        WHERE 
        id= '$id'";
        
        $user = $connection -> prepare($sql);
        $user -> execute();
        $connection = null;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Trabalho_Tarefas</title>
		 <link rel="stylesheet" href="css.css">
		 <script type="text/javascript" href="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
		 <script>

  
		 </script>
	</head>
	<body>
	
	</body>
</html>