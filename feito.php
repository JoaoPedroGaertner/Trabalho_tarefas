<h3>FEITO</h3>
				<table border="1" class="tabelas">
					<tr>
						<th>Descrição</th>
						<th class="tab">Editar</th>
						<th class="tab">Excluir</th>
						<th class="tab">Dias Restantes</th>
					</tr>
            <?php
                   include "conexao.php";	
					$sql = "SELECT * FROM tarefas";
					$usere = $connection -> prepare($sql);
					$usere -> execute();
					$connection = NULL;
					
                    foreach($usere as $a){
					$id = $a['id'];
					$descricao = $a['descricao'];
					$tipo = $a['tipo'];
					$dias = $a['dias'];
	
					if($tipo == '3'){
					echo "<tr>";
                    echo "<td><a'>$descricao</a></td>";
                    echo "<td><a href='editar.php?id=$id&descricao=$descricao' aria-label='Editar' data-microtip-position='bottom-right' role='tooltip'>
					<img src='editar.png' id='edit' name='editar'  style='width:25px;'>
                    </a></td>";
                    echo "<td>
					<button class='exclu' onclick='comentar2($id)' aria-label='Excluir' data-microtip-position='bottom-right' role='tooltip'>
					<img src='lixeira.png' name='excluir' id='ex'  style='width:25px;'>
					</button>
                    </a></td>";
					echo "<td>$dias</td>";
                    echo "</tr>"; 
					}
					}
            ?>
				</table>