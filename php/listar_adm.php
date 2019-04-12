<?php
     session_start();
     if($_SESSION['login'] != 'true'){
         header('location:/index.php');
     }

    include "conexao.php";
	$sql = "SELECT * FROM adm_tb";
	$adms = $connection -> prepare($sql);
    $adms -> execute();


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Css/head,foot.css"><!-- Chamando CSS para cabeçalho, rodapé e menu-->
		<link rel="stylesheet" href="../Css/home.css"><!-- Chamando o CSS da pagina home-->
    <title>Lista de ADM</title>
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
			<li><a href="cadastro_adm.php">Cadastrar um ADM</a>
        </ul>
        <br><br>
        <h2> Lista de Administradores </h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <!-- <th>Telefone</th> -->
                <th>RG</th>
                <th>CPF</th>
                <th>Sexo</th>
                <th>Data Nascimento</th>
            </tr>
            <?php
                foreach($adms as $adms){
                    $id = $adms['id_adm'];
                    $nome = $adms['nome'];
                    $email = $adms['email'];
                    $rg = $adms['rg'];
                    $cpf = $adms['cpf'];
                    $sexo = $adms['sexo'];
                    $data = $adms['data_nascimento'];
                    if($sexo=="m"){
                        $sexo = "Masculino";
                    }else if($sexo == "f"){
                        $sexo = "Feminino";
                    }

                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$nome</td>";
                    echo "<td>$email</td>";
                    echo "<td>$rg</td>";
                    echo "<td>$cpf</td>";
                    echo "<td>$sexo</td>";
                    echo "<td>".date("d/m/y",strtotime($data))."</td>";
                    echo "<td><a href='editar_adm.php?id=$id' title='Editar $nome'>
                    <img src='../imgs/edit.png' style='width:25px;'>
                    </a></td>";
                    echo "<td><a href='excluir_adm.php?id=$id&nome=$nome' title='Excluir $nome'>
                    <img src='../imgs/lixeira.png' style='width:25px;'>
                    </a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
	</div>
</body>
</html>
