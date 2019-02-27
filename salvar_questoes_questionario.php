

<?php
	// Definição de conexão
	include 'conexao.php';

	// Atribiudindo variáveis de sessão

	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");
		$usuario_id = $_SESSION['usuario_id'];
    $questionario_id = $_SESSION['id_questionario'];

    echo "$questionario_id, deveria estar aqui";
    echo $_SESSION['id_questionario'];

    //verifica as questões selecionadas pelo usuário para o questionário a ser criado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	     echo 'you have added the following tools to your shopping cart:';
	     foreach ($_POST['checked'] as $value) {
         $sql = "INSERT INTO question_questoes VALUES (DEFAULT, '$questionario_id', '$value')";

         if (mysqli_query($conn, $sql)) {
           echo "New record created successfully";
         } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }
	     }
     }
     header("Location: termos_condicoes.php");


	}
?>
