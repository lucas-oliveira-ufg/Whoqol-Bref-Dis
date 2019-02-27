<?php
	// Definição de conexão
	include 'conexao.php';

	// Atribiudindo variáveis de sessão

	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");
		$usuario_id = $_SESSION['id_pesquisador'];


    $consulta = "SELECT DISTINCT questionario.id_questionario, questionario.nome_questionario, questionario.id_pesquisador_fk
		             FROM questionario INNER JOIN respostas WHERE id_questionario_fk = id_questionario
								      and respostas.id_pesquisador_fk = $usuario_id
"; //provavelmente fazer inner join
    $questoes_consulta = $conn->query($consulta);
    $questoes = $questoes_consulta->fetch_assoc();

		$_SESSION['id_quest'] = $questoes['id_questionario'];
		$_SESSION['nome_quest'] = $questoes['nome_questionario'];
		$_SESSION['id_pesq'] = $questoes['id_pesquisador_fk'];

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

			<script text/javascript>

          function alerta(){
						window.alert("Não existem questionários respondidos!");
						setTimeout("window.location.href='termos_condicoes.php'", 0000);
					}

			</script>

</head>

<body>

	<?php
	if ($_SESSION['id_quest'] === NULL) {
		 echo"<script>alerta()</script>";	}
	?>

<div class="tabs">





  <div class="content">

			<table class="table">
					<thead>
						<tr>

							<th scope="col">Nome do Questionário</th>
							<th scope="col">Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php
								if ($num_linhas > 0) {
										while ($num_linhas = mysqli_fetch_array($result)) {
										echo "<tr>";
												echo "<td>".$num_linhas['nome_questionario']."</td>";

												?>
												<td> <a href='relatorio_id_participantes.php?&id_quest=<?php echo $num_linhas['id_questionario']; ?>'><button type='button' class='btn btn-primary'>Visualizar</button></td>
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
