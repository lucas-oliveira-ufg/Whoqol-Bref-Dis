<?php
	// Definição de conexão
	include 'conexao.php';

	// Atribiudindo variáveis de sessão

	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");
		$usuario_id = $_SESSION['usuario_id'];



	}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


 <!--<link href="css_cadastro_questionario/bootstrap_cadastro.min.css" rel="stylesheet">
 <link href="css_cadastro_questionario/style.css" rel="stylesheet">-->
</head>
<body>

 <!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <!------ Include the above in your HEAD tag ---------->

 <div align="center" class="container">
 <div align="center" class="col-md-5">
     <div align="center" class="form-area">
         <form method="post" action="salvar_cadastro_questionario.php" align="center" role="form">
         <br style="clear:both">
                     <h3 style="margin-bottom: 25px; text-align: center;">Cadastrar Questionário</h3>
     				<div class="form-group">
 						<input type="text" class="form-control" id="name" name="label_nome_quest" placeholder="Nome do Questionário" required>
 					</div>
 					<div class="form-group">
 						<input type="text" class="form-control" id="email" name="label_quant_questoes" placeholder="Tipo Questionário: Ex: (Whoqol-Bref/Whoqol-Dis)" required>
 					</div>
 					<div class="form-group">
 						<input type="text" class="form-control" id="mobile" name="label_estado_questionario" placeholder="Estado do Questionário: Ex: (Ativo/Concluído)" required>
 					</div>
 					<button type="submit" id="submit" name="submit" class="btn btn-primary pull">Salvar</button>
					<button type="button" class="btn btn-primary" onclick="window.location.href='termos_condicoes.php'">Cancelar</button>

         </form>
     </div>
 </div>
 </div>



<!-- <script src="js_cadastro_questionario/jquery.min.js"></script>
 <script src="js_cadastro_questionario/bootstrap.min.js"></script>-->
</body>
</html>
