<?php
	// Definição de conexão
	include 'conexao.php';
	// Atribiudindo variáveis de sessão


	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");
		$usuario_id = $_SESSION['usuario_id'];

		$consulta = "SELECT id_pesquisador FROM pesquisador WHERE id_usuario_fk = $usuario_id";
		$questoes_consulta = $conn->query($consulta);
		$questoes = $questoes_consulta->fetch_assoc();

		$_SESSION['id_pesquisador'] = $questoes['id_pesquisador'];

		$pesquisador = $_SESSION['id_pesquisador'];
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

			$questionarios = "SELECT * FROM questionario WHERE id_pesquisador_fk = '$pesquisador'";
			$questionarios_result = $conn->query($questionarios);
			$usuario_questionarios = $questionarios_result->fetch_assoc();

			$result = mysqli_query($conn, $questionarios);

			$num_linhas = mysqli_num_rows($result); // armazena a quantidade de questionários de um pesquisador

			// echo $num_linhas;
	?>

<div align="center" class="tabs">

  <input type="radio" id="tab1" name="tab-control" checked>
  <input type="radio" id="tab2" name="tab-control">
  <input type="radio" id="tab3" name="tab-control">
  <!--<input type="radio" id="tab4" name="tab-control">-->
  <ul align="center">
    <li title="Questionarios"><label for="tab1" role="button"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>Questionários</span></label></li>
    <li title="Criar Questionário"><label for="tab2" role="button"><path d="M2,10.96C1.5,10.68 1.35,10.07 1.63,9.59L3.13,7C3.24,6.8 3.41,6.66 3.6,6.58L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.66,6.72 20.82,6.88 20.91,7.08L22.36,9.6C22.64,10.08 22.47,10.69 22,10.96L21,11.54V16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V10.96C2.7,11.13 2.32,11.14 2,10.96M12,4.15V4.15L12,10.85V10.85L17.96,7.5L12,4.15M5,15.91L11,19.29V12.58L5,9.21V15.91M19,15.91V12.69L14,15.59C13.67,15.77 13.3,15.76 13,15.6V19.29L19,15.91M13.85,13.36L20.13,9.73L19.55,8.72L13.27,12.35L13.85,13.36Z" />
</svg><br><span>Criar Questionário</span></label></li>
    <li title="Relatório"><label for="tab3" role="button">
    <path d="M3,4A2,2 0 0,0 1,6V17H3A3,3 0 0,0 6,20A3,3 0 0,0 9,17H15A3,3 0 0,0 18,20A3,3 0 0,0 21,17H23V12L20,8H17V4M10,6L14,10L10,14V11H4V9H10M17,9.5H19.5L21.47,12H17M6,15.5A1.5,1.5 0 0,1 7.5,17A1.5,1.5 0 0,1 6,18.5A1.5,1.5 0 0,1 4.5,17A1.5,1.5 0 0,1 6,15.5M18,15.5A1.5,1.5 0 0,1 19.5,17A1.5,1.5 0 0,1 18,18.5A1.5,1.5 0 0,1 16.5,17A1.5,1.5 0 0,1 18,15.5Z" />
</svg><br><span>Relatório</span></label></li>   <!-- <li title="Relatório"><label for="tab4" role="button">
    <path d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
-->
  </ul>

  <!--<div left="25px" class="slider"><div left="25px" class="indicator"></div></div>-->
  <div class="content">
    <section>
      <h2>Questionários</h2>

				<table class="table">
						<thead>
							<tr>

								<th scope="col">Nome do Questionário</th>
								<th scope="col">Tipo Quest.</th>
								<th scope="col">Estado</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						<tbody>
							<?php
							 $mensagem_1 = "Sem questionários criados.";
							 $mensagem_2 = "Crie um novo questionário em: Criar Questinário.";
									if ($num_linhas > 0) {
											while ($num_linhas = mysqli_fetch_array($result)) {
							 				echo "<tr>";
													echo "<td>".$num_linhas['nome_questionario']."</td>";
													echo "<td>".$num_linhas['quant_questoes']."</td>";
													echo "<td>".$num_linhas['estado']."</td>";
													?>
													<td> <a href='visualizar.php?&id=<?php echo $num_linhas['id_questionario']; ?>'><button type='button' class='btn btn-primary'>Visualizar</button></td>
											<?php
											echo "</tr>";
										}

									}
							 ?>
						</tbody>
					</table>

		</section>
        <section>
          <h2>Criar Questionário</h2>
						<button  title="criar_quest" class='btn btn-primary' onclick="window.location.href='cadastro_questionario.php'">+ Criar Questionário</button>
				</section>
        <section>
          <h2>Relatório</h2>
						<button title="relatorio" class='btn btn-primary' onclick="window.location.href='relatorio.php'">Questionários Respondidos</button>
				</section>
  </div>
</div>


</body>
</html>
