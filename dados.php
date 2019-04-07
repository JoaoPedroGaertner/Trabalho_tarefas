<?php 
$host  = "localhost";
$user  = "root";
$senha = "";
$db    = "tarefas_bd";

$connection  =  mysqli_connect($host, $user, $senha, $db);

$id = "";
$nome  = $_POST['nome'];
$descricao = $_POST['email'];

$sql = "INSERT INTO `tarefas` (`id`,`nome`,`descricao`) VALUES ('{$id}','{$nome}','{$descricao}')";

$connection->query($sql);
?>