<html>

 <head>

   <script type="text/javascript">

     function sucesso()  //Caso o login seja realizado, o usuário é direcionado a termos e condições
     {
           alert("Questionário excluído com sucesso :D");
           setTimeout("window.location.href='administrador_quest.php'", 0000);

     }

     </script>

 </head>

 <body>


</body>
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

		$id_quest = $_GET['id_questionario'];

    echo "$id_quest";

	////////////// Seleciona o id do pesquisador relacionado ao id de usuário

		$consulta = "DELETE FROM questionario WHERE id_questionario = '$id_quest'";
		$questoes_consulta = $conn->query($consulta);
		$questoes = $questoes_consulta->fetch_assoc();

    if (mysqli_query($conn, $consulta)) {
      echo "<script>sucesso()</script>";
    } else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conn);
    }




	}




?>
