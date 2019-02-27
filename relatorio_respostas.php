<?php
	// Definição de conexão
	include 'conexao.php';

	// Atribiudindo variáveis de sessão

	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");
		$usuario_id = $_SESSION['usuario_id'];
    $id_quest = $_SESSION['id_quest'];
		$participante = $_SESSION['participante'];


	}
?>



<?php

        foreach ($participante as $value) {

				$consulta	=	"SELECT DISTINCT respostas.email_participante, respostas.id_questao_fk, questoes.texto_questao,
				                             respostas.resposta, respostas.data_respostas as data
										 FROM `respostas`, questoes, questionario
										 WHERE respostas.email_participante LIKE '$value' and respostas.id_questao_fk = questoes.id_questao
										       and '$id_quest' = respostas.id_questionario_fk";

        $questoes_consulta = $conn->query($consulta);
  			$questoes = $questoes_consulta->fetch_assoc();





  			$result = mysqli_query($conn, $consulta);

  			$num_linhas = mysqli_num_rows($result); // armazena a quantidade de questionários de um pesquisador

        $nome = $questoes['email_participante'];
				$data = $questoes['data'];
     ?>




<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!--- Include the above in your HEAD tag ---------->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

  </head>

  <body>



  <div class="container">
  	<div class="row">

       <form action="termos_condicoes.php" >


          <div class="col-md-12">
          <h2></h2>
          <div class="table-responsive">


                <table id="mytable" class="table table-bordred table-striped">

                  <thead>
                    <?php echo "<td><h3>"."Participante: ".$nome           ."</h3></td>"; ?>
										<?php echo "<td><h3>"."Data: ".$data           ."</h3></td>"; ?>

        						<tr>
        							<th scope="col">Nº da Questão</th>
        							<th scope="col">Questão</th>
        							<th scope="col">Resposta</th>
        						</tr>
        					</thead>
      <tbody>

        <?php
            if ($num_linhas > 0) {

                while ($num_linhas = mysqli_fetch_array($result)) {
                echo "<tr>";
                  //  echo "<td>".'<input type="checkbox" class="checkthis" />'."</td>";
										echo "<td>".$num_linhas['id_questao_fk']."</td>";
                    echo "<td>".$num_linhas['texto_questao']."</td>";
                    echo "<td>".$num_linhas['resposta']."</td>";

                  //  echo "<td>".$num_linhas['texto_questao']."</td>";
                echo "</tr>";
              }
            }

         ?>
<!--
      <tr>
      <td><input type="checkbox" class="checkthis" /></td>
      <td>Mohsin</td>
      <td>Irshad</td>
      <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
      <td>isometric.mohsin@gmail.com</td>
      <td>+923335586757</td>
      </tr>
-->




      </tbody>

  </table>

	<button align="center" class="btn btn-primary" >Voltar</button>


</form>

  <div class="clearfix"></div>


              </div>

          </div>
  	</div>
  </div>

</body>
</html>
<?php } ?>
