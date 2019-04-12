<?php
    session_start();
        if($_SESSION['login'] != 'true'){
        header('location:index.php');
    }

    $id_adm ="";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $sexo = $_POST['sexo'];
    $dataNascimento = $_POST['dataNascimento'];
    $senha = $_POST['senha'];

    // include "conexao.php";
    // $sql = "INSERT INTO adm_tb
    // VALUES
    // (?,?,?,?,?,?,?,?)";
    // $adm = $connection -> prepare($sql);
    // $adm -> execute(array($id_adm,$nome,$email,$cpf,$rg,$sexo,$dataNascimento,$senha));
    // $connection = null;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastrar ADM - Endereço</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/home.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="Css/head,foot.css" />
</head>
<body>
     <!---------------- Cabeçalho ---------------->
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
				<li ><a id="login" href="login.php" >Login</a></li>
			</ul>
		</div>
	</header>
	<br><br> 
    <div id="principal">
        <form action="cadastro_adm_telefone.php" method="post">
            <input type="hidden" name="id_adm" value=<?php echo "$id_adm"?>/>
            <input type="hidden" name="nome" value=<?php echo "$nome"?>/>
            <input type="hidden" name="email" value=<?php echo "$email"?>/>
            <input type="hidden" name="cpf" value=<?php echo "$cpf"?>/>
            <input type="hidden" name="rg" value=<?php echo "$rg"?>/>
            <input type="hidden" name="sexo" value=<?php echo "$sexo"?>/>
            <input type="hidden" name="dataNascimento" value=<?php echo "$dataNascimento"?>/>
            <input type="hidden" name="senha" value=<?php echo "$senha"?>/>

            <h2>Dados de endereço</h2>

            Rua <br> <input type="text" name="rua" class="formulario"/><br><br>
            Número <br> <input type="text" name="numero" class="formulario"/><br><br>
            CEP <br> <input type="text" name="cep" class="formulario"/><br><br>
            Bairro <br> <input type="text" name="bairro" class="formulario"/><br><br>
            Cidade <br> <input type="text" name="cidade" class="formulario"><br><br>
            Estado<br> <input type="text" name="estado" class="formulario"/><br><br>

            <input type="submit" name="salvar"  class="formulario-submit" value="Salvar"/><br><br>
        </form>
    </div>
</body>
</html>