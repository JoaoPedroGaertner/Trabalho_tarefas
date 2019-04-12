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
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    include "conexao.php";
    $pegarid = "SELECT id_endereco WHERE rua=$rua and numero=$numero";
    $bd = $connection -> prepare($pegarid);
    $bd -> execute();

    echo $pegarid;

   
    

    // include "conexao.php";
    // $sql = "INSERT INTO telefone_tb
    // VALUES(?,?,?)";
    // $adm_fone = $connection -> prepare($sql);
    // $adm_fone -> execute(array($id_endereco,$rua,$numero,$cep,$bairro,$cidade,$estado));
    // $connection = null;
?>