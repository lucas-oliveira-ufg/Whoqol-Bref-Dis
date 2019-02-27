<html>

  <head>

    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
    </script>

    <script type="text/javascript">

      function  saved_success()  //Caso o login seja realizado, o usuário é direcionado a termos e condições
      {
            setTimeout("window.location.href='usuario.php'", 3000);

      }



    </script>

  </head>


</html>

<?php
	// Definição de conexão
  include 'conexao.php';

	// Atribiudindo variáveis de sessão

	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");
		$usuario_id = $_SESSION['usuario_id'];
//    $num = $_SESSION['num_linhas'];
    $id_res = $_POST['id'];
    //$questionario_id = $_SESSION['id_questionario'];

//dados para o banco de dados: tabela respostas
    $id_quest = $_SESSION['id_quest']; // id do questionario a ser respondido
    $usuario_id = $_SESSION['usuario_id']; // id do usuario
		$id_pesquisador = $_SESSION['id_pesq'];



    //echo $questionario_id;

    //verifica as questões selecionadas pelo usuário para o questionário a ser criado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	     foreach ($_POST['id'] as $value) {
				 $value = explode("-", $value);
				 $resposta = $value[0];
				 $id_questao = $value[1];
         $sql = "INSERT INTO respostas (id_resposta, id_pesquisador_fk, id_questionario_fk, id_questao_fk, id_participante_fk, resposta) VALUES (DEFAULT, '$id_pesquisador', '$id_quest', '$id_questao', '$usuario_id', '$resposta')";

         if (mysqli_query($conn, $sql)) {
           echo "<script>saved_success()</script>";
         } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }

	     }

     }

		 echo "Questionário Respondido com Sucesso! Muito Obrigado";






	}
?>
