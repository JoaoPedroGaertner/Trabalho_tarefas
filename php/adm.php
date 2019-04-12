<?php
    session_start();
    if($_SESSION['login'] != 'true'){
        header('location:/index.php');
	}
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Css/head,foot.css"><!-- Chamando CSS para cabeçalho, rodapé e menu-->
		<link rel="stylesheet" href="../Css/home.css"><!-- Chamando o CSS da pagina home-->
    <title>Página de ADM</title>
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
				<?php
					// error_reporting(0);
					// ini_set(“display_errors”, 0 );

					if($_SESSION['login'] == "true"){
						echo "<li ><a id='login' href='logout.php' >Sair</a></li>";
					}else{
						echo "<li ><a id='login' href='login.php' >Login</a></li>";
					}
				?>
			</ul>
		</div>
	</header><br><br>
	<div id="adm-principal">
		<ul>
			<li><a href="listar_adm.php">Administradores</a>
	</div>
</body>
</html>