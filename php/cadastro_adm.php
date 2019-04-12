<?php
    session_start();
        if($_SESSION['login'] != 'true'){
        header('location:/index.php');
    }
    if(ISSET($_POST['salvar'])){
        $id_adm = "";
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $sexo = $_POST['sexo'];
        $dataNascimento = $_POST['dataNascimento'];
        $senha = $_POST['senha'];
        $rua = $_POST['rua'];
        $numeroEnde = $_POST['numeroEnde'];
        $bairro = $_POST['bairro'];

        include "conexao.php";
        $sql = "INSERT INTO adm_tb
        VALUES
        (?,?,?,?,?,?,?,?)";
        $adm = $connection -> prepare($sql);
        $adm -> execute(array($id_adm,$nome,$email,$cpf,$rg,$sexo,$dataNascimento,$senha));
        $connection = null;
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
    <title>Cadastrar ADM</title>
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
	</header>
	<br><br> 
    <div id="principal-cadastro">
        <form action="#" method="POST">
            Nome<br><input type="text" name="nome" required class="formulario" placeholder="Digite aqui o nome a ser registrado"/><br><BR>
            Email<br><input type="email" name="email" required class="formulario" placeholder="Digite aqui o email a ser registrado"/><br><BR>
            CPF<br><input type="text" name="cpf" required class="formulario" placeholder="Digite aqui o CPF a ser registrado"/><br><BR>
            RG<br><input type="text" name="rg" required class="formulario" placeholder="Digite aqui o RG a ser registrado"/><br><BR>
            Sexo<br><input type="radio" name="sexo" class="formulario-radio" required id="m" value="m"/> <label for="m">Masculino</label>
            <br> <input type="radio" name="sexo" class="formulario-radio" required id="f" value="f"/> <label for="f">Feminino</label><br><br>
            Data de Nascimento<br> <input type="date" required name="dataNascimento" class="formulario"><br><br>
            Senha<br> <input type="password" required name="senha" class="formulario" placeholder="Digite aqui a senha"><br><br>

            <input type="submit" name="salvar" value="Salvar" class="formulario-submit"/>

        </form>
    </div>
    <footer>
			<img src="../imgs/facebook.png" class="redes" id="facebook"/>
			<img src="../imgs/twitter.png" class="redes"/>
			<img src="../imgs/zapzap.png" class="redes"/>
			<p id="contat">	
				<br>
				Endereço: Rua Alfredo Leon, 666, Campo Curto<br>
				Telefone: (82)98989-8989<br>
				E-mail:SchoolCard@gmail.com<br>
				© SchoolCard, 2018. Todos os direitos reservados.
			</p>
		</footer>
</body>
</html>