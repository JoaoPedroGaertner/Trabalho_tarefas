<?php
    session_start();
    error_reporting(0);
    
    session_start();
    if($_SESSION['login'] == 'true'){
    header('location:/index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../Css/home.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../Css/head,foot.css" />
</head>
<body id="body-login">
    <header> 	
            <a href="index.php">
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
    <div id="div-login">
        <form action="#" method="POST">
            Email:<br><input type="email" name="email" required class="formulario" placeholder="Digite seu E-mail"/><br><br>
            Senha:<br><input type="password" name="senha" required class="formulario" placeholder="Digite Sua Senha"><br><br>

            <?php
                if(ISSET($_POST['logar'])){
                    $email_log = $_POST['email'];
                    $senha_log = $_POST['senha'];

                    include "conexao.php";

                    $sql = "SELECT * FROM adm_tb WHERE email = '$email_log' AND senha = '$senha_log'";

                    $cliente = $connection -> prepare($sql);
                    $cliente -> execute();
                    $qtde = $cliente -> rowCount();
                    $conection = null;
                    
                    if($qtde == 1){
                        session_start();
                        $_SESSION['login'] = "true";
                        $_SESSION['email'] = "$email_log";
                        header("Location: /index.php");
                    }else{
                        session_start();
                        session_destroy();
                        echo "<div id='erro-login'> Email e senha não coincidem </div>";
                    }
                }
            ?><br>

            <a href="">Esqueci a Senha</a><br><br>
            <input type="submit" name="logar" class="formulario-submit">
        </form>
    </div><br>

    <footer id="footer-login">
			<img src="../imgs/facebook.png" class="redes"/>
			<img src="../imgs/twitter.png" class="redes"/>
			<img src="../imgs/zapzap.png" class="redes"/>
			<p id="contat">	
				<br>
				Endereço: Rua Alfredo Leon, 666, Campo Curto<br>
				E-mail:SchoolCard@gmail.com<br>
				© SchoolCard, 2018. Todos os direitos reservados.
			</p>
	</footer>
    
</body>
</html>