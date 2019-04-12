<?php
    session_start();
    // error_reporting(0);

    if($_SESSION['login'] != 'true'){
    header('location:/index.php');
    }

    $id=$_GET['id'];

    include "conexao.php";
    $sql = "SELECT * FROM adm_tb where id_adm=$id";
    $adm = $connection -> prepare($sql);
    $adm -> execute();

    foreach($adm as $adms){}
        
    if(ISSET($_POST['salvar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $data = $_POST['data'];

        $sql = "UPDATE adm_tb 
        SET
        nome = '$nome',
        email = '$email',
        rg = '$rg',
        cpf = '$cpf',
        data_nascimento = '$data'
        WHERE 
        id_adm = '$id'";
        $adm = $connection -> prepare($sql);
        $adm -> execute();
        $connection = null;
        header("location:listar_adm.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar ADM</title>
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
        <h2> Editar ADM </h2><br><br>
        <form action="#" method="post">
            Nome<br>
            <input type="text" name="nome" class="formulario" value="<?php echo $adms['nome'] ?>"/><br><br>
            Email<br>
            <input type="email" name="email" class="formulario" value="<?php echo $adms['email'] ?>"/><br><br>
            RG<br>
            <input type="text" name="rg" class="formulario" value="<?php echo $adms['rg'] ?>"/><br><br>
            CPF<br>
            <input type="text" name="cpf" class="formulario"  maxlength="14" value="<?php echo $adms['cpf'] ?>"/><br><br>
            Data de Nascimento<br>
            <input type="date" name="data" class="formulario" value="<?php echo $adms['data_nascimento'] ?>"/><br><br>
            <input type="submit" name="salvar" class="formulario-submit"/><br>
        </form>
    </div>
</body>
</html>