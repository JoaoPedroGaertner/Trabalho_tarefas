<?php
    session_start();
    error_reporting(0);
    
    session_start();
    if($_SESSION['login'] != 'true'){
    header('location:/index.php');
    }

    $id = $_GET['id'];
    $nome = $_GET['nome']; 

    if(ISSET($_POST['excluir'])){
		$sql = "DELETE FROM adm_tb WHERE id_adm = $id";
		include "conexao.php";
		$adm = $connection -> prepare($sql);
		$adm -> execute();
		$connection = NULL;
		header("Location: listar_adm.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Excluir ADM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../Css/head,foot.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../Css/home.css" />
</head>
<body>
    <header> 	
        <a href="/index.php">
            <img id="logo" src="../imgs/logo.png"/>
        </a>
        <!-------------------- Menu ------------------->
        <div id="menu">
            <ul>
                <li><a href="">Histórico</a></li>
                <li><a href="">Crédito</a></li>
                <li><a href="">Documentação</a></li>
                <li><a href="Sobre.php">Sobre</a></li>
                <li ><a id="login" href="login.php" class="active">Login</a></li>
            </ul>
        </div>	
    </header><br><br>
    <div id="adm-principal">
        <h2>Deseja mesmo excluir esse adm?</h2><br><br>
        <input type='submit' name='excluir' class='formulario-submit' value="Excluir"/>
        <input type='button' value="Voltar" class='formulario-submit' onclick="Javascript:window.history.back();"/>
    </div>
</body>
</html>