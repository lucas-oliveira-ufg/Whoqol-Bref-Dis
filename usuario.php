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
<html >
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="sessao_css/sessao.css">
			<link rel="stylesheet" href="tabela.css">

</head>

<body>
	<h1>Bem-vindo (a), <?php	echo $_SESSION['usuario_nome'];	?></h1>

	<?php
		//	$id_usuario = $_SESSION['usuario_id'];/*

		  //$usuario = "SELECT Id FROM Cadastro WHERE nome = '$usuario_nome' and Email = '$usuario_email'";
			//$usuario_resultado = $conn->query($usuario);
			//$usuario_resultado_id = $usuario_resultado->fetch_assoc();

			//$_SESSION['usuario_id'] = $usuario_resultado_id['Id'];

			//echo $_SESSION['usuario_id'];

			$questionarios = "SELECT * FROM questionario WHERE id_pesquisador_fk = '$usuario_id'";
			$questionarios_result = $conn->query($questionarios);
			$usuario_questionarios = $questionarios_result->fetch_assoc();

			$result = mysqli_query($conn, $questionarios);

			$num_linhas = mysqli_num_rows($result); // armazena a quantidade de questionários de um pesquisador

			// echo $num_linhas;
	?>

<div class="tabs">





  <div class="content">

      <h2 align="center">Pesquisar Questionários</h2>

      <form action="pesquisar_questionario.php" align="center" method="post">
          <div class="form-group">
            <input name="pesquisar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite aqui">
            <small id="emailHelp" class="form-text text-muted">Digite somente o nome do questionário.</small>
          </div>
          <button type="submit" class="btn btn-primary">Pesquisar</button>
      </form>

		</section>

    <!--      <h2>Sair</h2>
					<button title="sair" onclick="window.location.href='sair.php'">Sair</button>
        </section> -->
  </div>
</div>


</body>
</html>
