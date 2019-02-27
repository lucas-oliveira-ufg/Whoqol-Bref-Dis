<?php
	// Definição de conexão
	include 'conexao.php';

	// Atribiudindo variáveis de sessão

	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");
    echo "Entrei";

		$id_pesquisador = $_SESSION['id_pesquisador'];
    $nome_questionario = $_POST['label_nome_quest'];
    $quant_questoes = $_POST['label_quant_questoes'];
    $estado_questionario = $_POST['label_estado_questionario'];

    echo "$nome_questinario";

    $sql = "INSERT INTO questionario VALUES (DEFAULT, '$nome_questionario', '$quant_questoes', '$estado_questionario', '$id_pesquisador')";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      //mysqli_close($conn);
	}

	$questionarios = "SELECT * FROM questionario WHERE nome_questionario = '$nome_questionario' and id_pesquisador_fk = '$id_pesquisador'";
	$questionarios_result = $conn->query($questionarios);
	$usuario_questionarios = $questionarios_result->fetch_assoc();

	$_SESSION['id_questionario'] = $usuario_questionarios['id_questionario'];
//	echo $_SESSION['id_questionario'];


  header("Location: criar_questionario.php");




?>
