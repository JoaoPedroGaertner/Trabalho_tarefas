<?php 
    session_start();
        if($_SESSION['login'] != 'true'){
        header('location:/index.php');
    }
    $id_adm = $_POST['id_adm'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $sexo = $_POST['sexo'];
    $dataNascimento = $_POST['dataNascimento'];
    $senha = $_POST['senha'];

    $id_endereco ="";
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    include "conexao.php";
    $sql = "INSERT INTO endereco_tb
    VALUES(?,?,?,?,?,?,?)";
    $adm_endereco = $connection -> prepare($sql);
    $adm_endereco -> execute(array($id_endereco,$rua,$numero,$cep,$bairro,$cidade,$estado));
    $connection = null;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro ADM - Telefone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/home.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="Css/head,foot.css" />
</head>
<body>
    <header> 	
		<a href="index.php">
			<img id="logo" src="imgs/logo.png"/>
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
        <form action="cadastro_adm_telefone2.php" method="post">
            <input type="hidden" name="id_adm" value=<?php echo "$id_adm"?>/>
            <input type="hidden" name="nome" value=<?php echo "$nome"?>/>
            <input type="hidden" name="email" value=<?php echo "$email"?>/>
            <input type="hidden" name="cpf" value=<?php echo "$cpf"?>/>
            <input type="hidden" name="rg" value=<?php echo "$rg"?>/>
            <input type="hidden" name="sexo" value=<?php echo "$sexo"?>/>
            <input type="hidden" name="dataNascimento" value=<?php echo "$dataNascimento"?>/>
            <input type="hidden" name="senha" value=<?php echo "$senha"?>/>
            <input type="hidden" name="idEndereco" value=<?php echo "$id_endereco"?> />
            <input type="hidden" name="rua" value=<?php echo "$rua"?> />
            <input type="hidden" name="numero" value=<?php echo "$numero"?> />
            <input type="hidden" name="cep" value=<?php echo "$cep"?> />
            <input type="hidden" name="bairro" value=<?php echo "$bairro"?> />
            <input type="hidden" name="cidade" value=<?php echo "$cidade"?> />
            <input type="hidden" name="estado" value=<?php echo "$estado"?> />

            <h2>Dados Telefônicos </h2>

            DDD<br> <input type="text" name="ddd" class="formulario" placeholder="Digite aqui o DDD"/><br><br>
            Numero<br> <input type="text" name="telefone" class="formulario" placeholder="Digite aqui o numero de telefone"/><br><br>

            <input type="submit" value="Salvar" name="salvar" class="formulario-submit"/>
    </div>
</body>
</html>