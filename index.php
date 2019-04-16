
<!DOCTYPE html>
<html>
	<head>
		<title>Trabalho_Tarefas</title>
		 <link rel="stylesheet" href="css.css">
		 <link rel="stylesheet" href="pace.css">
		 <link rel="stylesheet" href="microtip.css">
		<link href="/pace/themes/pace-theme-barber-shop.css" rel="stylesheet" /> 
		
		<!-- include alertify.css -->
		<link rel="stylesheet" href="css/alertify.css">

		<!-- include semantic ui theme  -->
		<link rel="stylesheet" href="css/themes/semantic.css">

		<!-- include alertify script -->
		<script src="Js/alertify.js"></script>
		<script>
			function comentarios(){
				alertify.success('Cadastrado com sucesso!');
			}
			function voltar(){
				document.getElementById('formulario1').style.display = "none";
			}
			function mostrar(){
				document.getElementById('formulario1').style.display = "block";
			}
			function comentar2(id){
				
				var ids = id;
				var dados = {ids:ids}
				alertify.confirm('Excluir o card '+ids,
				  function(){
					alertify.success('Ok');
					$.post('excluir.php',dados,function(retorna){
						
						fazer();
						fazendo();
						feito();
					});
					
				  },
				  function(){
					alertify.error('Cancel');
				  });
				 } 
			 
				function sumir(){
					doc
				}
			</script>
					
	 
	</head>
	<body >
		<div id="menu">
			<center><a aria-label='Adicionar um novo card' data-microtip-position='up' role='tooltip'>
			<input type="button" name="botao1" onclick="mostrar()" id="bot1" value="ADD NOVO CARD" /></a></center><br>
			
			
			<div id="formulario1">
			
			</div>
		</div>
		<br>
		<div id="titulos">
		
<!----fazer------>
			<div id="fazer">
				
					
				<br><br>
			</div>
<!----fazendo------>
			<div id="fazendo">
				
				<br><br>
				
			</div>
<!---feito------->
			<div id="feito">
				
				<br><br>	
			</div>
		</div>
		<br>
	<script src="pace.js"></script>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
			<script type="text/javascript">
			$('#bot1').click(function(){
			$.ajax({
			url: 'cadastro.php',
			success: function(data) {
			$('#formulario1').html(data);
			},
			beforeSend: function(){
			},
			complete: function(){
			}
			});
			});

			
			function fazer(){
			$.ajax({
			url: 'afazer.php',
			success: function(data) {
			$('#fazer').html(data);
			},
			beforeSend: function(){
			},
			complete: function(){
			}
			});
			};
			fazer();
			
			$('#form1').submit(function(e){
				fazer();
			
			});
			setInterval(fazer(),2000);
			
			function fazendo(){
			$.ajax({
			url: 'fazendo.php',
			success: function(data) {
			$('#fazendo').html(data);
			},
			beforeSend: function(){
			},
			complete: function(){
			}
			});
			};
			fazendo();
			
			$('#form1').submit(function(e){
				fazendo();
			
			});
			setInterval(fazendo(),2000);
			
			function feito(){
			$.ajax({
			url: 'feito.php',
			success: function(data) {
			$('#feito').html(data);
			},
			beforeSend: function(){
			},
			complete: function(){
			}
			});
			};
			feito();
			
			$('#form1').submit(function(e){
				feito();
			
			});
			setInterval(feito(),2000);
			</script>
	</body>
</html>