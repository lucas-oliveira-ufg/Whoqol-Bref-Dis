
<?php
	// Definição de conexão
	include 'conexao.php';

	// Atribiudindo variáveis de sessão

	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");
		$usuario_id = $_SESSION['usuario_id'];

		$id = $_GET['id_usuario'];

	////////////// Seleciona o id do pesquisador relacionado ao id de usuário

		$consulta = "SELECT id_pesquisador FROM pesquisador Where id_usuario_fk = '$id'";
		$questoes_consulta = $conn->query($consulta);
		$questoes = $questoes_consulta->fetch_assoc();

		$pesq_fk = $questoes['id_pesquisador'];


/////////////// Seleciona os questionários criados pelo pesquisador

		$consulta_quest = "SELECT id_questionario, quant_questoes, nome_questionario FROM questionario Where id_pesquisador_fk = '$pesq_fk'";
		$questoes_consulta_quest = $conn->query($consulta_quest);
		$questoes_questoes = $questoes_consulta_quest->fetch_assoc();

		$result = mysqli_query($conn, $consulta_quest);

		$num_linhas = mysqli_num_rows($result);


	}




?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="adm/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="adm/starter-template.css" rel="stylesheet">
  </head>

  <body>


    <main role="main" class="container">

      <div class="starter-template">
        <table class="table">
    		<h3 align='center'>Questionários</h3>

          <br><br>
						<thead>
							<tr>

								<th scope="col">Id Questionário</th>
								<th scope="col">Nome do Questionário</th>
								<th scope="col">Tipo</th>
                <th scope="col">Ações</th>
							</tr>
						</thead>
						<tbody>
							<?php
									if ($num_linhas > 0) {
											while ($num_linhas = mysqli_fetch_array($result)) {
							 				echo "<tr>";
													echo "<td>".$num_linhas['id_questionario']."</td>";
													echo "<td>".$num_linhas['nome_questionario']."</td>";
													echo "<td>".$num_linhas['quant_questoes']."</td>";
													?>
													<td> <a href='deletar_quest.php?&id_quest=<?php echo $num_linhas['id_questionario']; ?>'><button type='button' class='btn btn-primary'>Deletar</button></td>
													<td> <a href='administrador_quest.php?&id_usuario=<?php echo $num_linhas['id_usuario']; ?>'><button type='button' class='btn btn-primary'>Alterar</button></td>
													<?php
											echo "</tr>";

										}
									}
							 ?>
						</tbody>
					</table>
					<a align='center' href='administrador.php'><button class='btn btn-primary'>Voltar</button>

      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="adm/popper.min.js"></script>
    <script src="adm/bootstrap.min.js"></script>
  </body>
</html>
