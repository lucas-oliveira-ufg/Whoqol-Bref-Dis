<?php
	// Definição de conexão
	include 'conexao.php';

	// Atribiudindo variáveis de sessão

	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");
		$usuario_id = $_SESSION['usuario_id'];
    $id = $_GET['id'];
	}
?>


<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">
		<meta charset="UTF-8">



    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!--- Include the above in your HEAD tag ---------->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

  </head>

  <body>

    <?php
      //  $consulta = "SELECT id_questao_fk FROM Question_Questoes WHERE id_questionario_fk = '$id' ORDER BY id_questao_fk ASC";
        $consulta = "SELECT * FROM questoes INNER JOIN question_questoes WHERE id_questionario_fk = '$id' and id_questao = id_questao_fk ORDER BY id_questao";
        $questoes_consulta = $conn->query($consulta);
  			$questoes = $questoes_consulta->fetch_assoc();


  			$result = mysqli_query($conn, $consulta);

  			$num_linhas = mysqli_num_rows($result); // armazena a quantidade de questionários de um pesquisador



     ?>




  <div class="container">
  	<div class="row">

<form  action="termos_condicoes.php" >

          <div class="col-md-12">
          <h4><?php echo $_SESSION['usuario_nome']?>, estas são as questões do seu questionário</h4>
          <div class="table-responsive">


                <table id="mytable" class="table table-bordred table-striped">


      <tbody>

        <?php
            if ($num_linhas > 0) {
                while ($num_linhas = mysqli_fetch_array($result)) {
                echo "<tr>";
                  //  echo "<td>".'<input type="checkbox" class="checkthis" />'."</td>";
										echo "<td>".$num_linhas['id_questao']."</td>";
                    echo "<td>".$num_linhas['texto_questao']."</td>";
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
