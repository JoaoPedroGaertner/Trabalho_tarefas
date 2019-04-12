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
    
    $id_endereco ="";
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $idTelefone = "";
    $ddd = $_POST['ddd'];
    $telefone = $_POST['telefone'];

    include "conexao.php";
    
    $sql = "INSERT INTO endereco_tb
    VALUES
    (?,?,?,?,?,?,?,?)";
    $admEndereco = $connection -> prepare($sql);
    $admEndereco -> execute(array($id_endereco,$rua,$numero,$cep,$bairro,$cidade,$estado,$id_adm));
    $connection = null;

    include "conexao.php";
    $sql = "INSERT INTO telefone_tb
    VALUES
    (?,?,?,?)";
    $admTel = $connection -> prepare($sql);
    $admTel -> execute(array($idTelefone,$ddd,$telefone,$id_adm));
    $connection = null;

    include "conexao.php";
    $sql = "INSERT INTO adm_tb
    VALUES
    (?,?,?,?,?,?,?)";
    $adm = $connection -> prepare($sql);
    $adm -> execute(array($id_adm,$nome,$email,$cpf,$rg,$sexo,$dataNascimento));
    $connection = null;
?>