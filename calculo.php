<?php
	
	$id = $_GET['id'];
	
    $sql = "SELECT * FROM tarefas where id = $id";
	// include "conexao.php";	
	$usere = $connection -> prepare($sql);
	$usere -> execute();

					
    foreach($usere as $a){}
	
	$data1 = $a['data_cadastro'];
	$data2 = $a['data'];
	
	// converte as datas para o formato timestamp
	
	$d1 = strtotime($data1); 
	$d2 = strtotime($data2);
	
	// verifica a diferença em segundos entre as duas datas e divide pelo número de segundos que um dia possui
	
	$dataFinal = ($d2 - $d1)/86400 ;
	
	// caso a data 2 seja menor que a data 1
	
	if($dataFinal < 0)
	$dataFinal = $dataFinal * -1;

	echo "Entre as duas datas informadas, existem $dataFinal dias.";
				
?>