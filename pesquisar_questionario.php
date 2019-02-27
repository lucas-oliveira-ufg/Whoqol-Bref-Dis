<?php
	// Definição de conexão
	$user = 'root';
	$password = 'SeT6arau';
	$db = 'sistema_whoq';
	$host = '127.0.0.1';
	$port = 3306;
	//Conectando...
	$conn = mysqli_connect($host,$user,$password,$db);
	// Status da conexão
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// Atribiudindo variáveis de sessão

	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");
		$usuario_id = $_SESSION['usuario_id'];

    $pesquisar = $_POST['pesquisar'];

    $consulta = "SELECT id_questionario, id_pesquisador_fk, quant_questoes, nome_questionario, estado, nome
		             FROM questionario, cadastro, pesquisador
		             WHERE questionario.nome_questionario LIKE '$pesquisar'
		                   AND pesquisador.id_pesquisador = questionario.id_pesquisador_fk
											 AND cadastro.id_usuario = pesquisador.id_usuario_fk LIMIT 1"; //provavelmente fazer inner join
    $questoes_consulta = $conn->query($consulta);
    $questoes = $questoes_consulta->fetch_assoc();


		$_SESSION['id_quest'] = $questoes['id_questionario'];
		$_SESSION['nome_quest'] = $questoes['nome_questionario'];
		$_SESSION['id_pesq'] = $questoes['id_pesquisador_fk'];
		$_SESSION['tipo_questionario'] = $questoes['quant_questoes'];

		//echo $_SESSION['nome_quest'], $_SESSION['nome_pesq'];

		$result = mysqli_query($conn, $consulta);

    $num_linhas = mysqli_num_rows($result); // armazena a quantidade de questionários de um pesquisador





	}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="sessao_css/sessao.css">
			<link rel="stylesheet" href="tabela.css">

			<script type="text/javascript">

			function no_quest() {

				window.alert("Questionário não encontrado. Por favor verifique se o nome foi digitado corretamente.");
				setTimeout("window.location.href='usuario.php'", 1000);
      }
			</script>



</head>

<body>

	<?php
	if ($num_linhas < 1 ) {
		echo "<script>no_quest()</script>";
	}
	?>

<div class="tabs">





  <div class="content">

			<table class="table">
					<thead>
						<tr>

							<th scope="col">Nome do Questionário</th>
							<th scope="col">Pesquisador</th>
							<th scope="col">Tipo Quest.</th>
							<th scope="col">Estado</th>
							<th scope="col">Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php
								if ($num_linhas > 0) {
										while ($num_linhas = mysqli_fetch_array($result)) {
										echo "<tr>";
												echo "<td>".$num_linhas['nome_questionario']."</td>";
												echo "<td>".$num_linhas['nome']."</td>";
												echo "<td>".$num_linhas['quant_questoes']."</td>";
												echo "<td>".$num_linhas['estado']."</td>";
												?>
												<td> <a href='responder.php'><button type='button' class='btn btn-primary'>Responder</button></td>
										<?php
										echo "</tr>";
									}
								}
						 ?>
					</tbody>
				</table>

		</section>

    <!--      <h2>Sair</h2>
					<button title="sair" onclick="window.location.href='sair.php'">Sair</button>
        </section> -->
  </div>
</div>


</body>
</html>
