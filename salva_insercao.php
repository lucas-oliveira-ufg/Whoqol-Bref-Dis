<?php
	// Definição de conexão
	include 'conexao.php';

	// Atribiudindo variáveis de sessão

	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");

    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $senha_usuario = $_POST['senha_usuario'];
    $nivel = $_POST['nivel'];


    $sql = "INSERT INTO cadastro VALUES (DEFAULT, '$nome_usuario', '$email_usuario', '$senha_usuario', '$nivel')";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      //mysqli_close($conn);
	}

  if ($nivel === '1') {

    $questionarios = "SELECT id_usuario FROM cadastro WHERE nome = '$nome_usuario'";
    $questionarios_result = $conn->query($questionarios);
    $id_usuario = $questionarios_result->fetch_assoc();

    $_SESSION['id'] = $id_usuario['id_usuario'];

    $id = $_SESSION['id'];

    echo "$id";

    $consulta = "INSERT INTO pesquisador VALUES (DEFAULT, '$id')";

    if (mysqli_query($conn, $consulta)) {
         header("Location: administrador.php");
    }
    else {
        echo "Error: " . $consulta . "<br>" . mysqli_error($conn);
    }
  }

	if ($nivel === '2') {

    $questionarios = "SELECT id_usuario FROM cadastro WHERE nome = '$nome_usuario'";
    $questionarios_result = $conn->query($questionarios);
    $id_usuario = $questionarios_result->fetch_assoc();

    $_SESSION['id'] = $id_usuario['id_usuario'];

    $id = $_SESSION['id'];

    echo "$id";

    $consulta = "INSERT INTO participante VALUES (DEFAULT, '$id')";

    if (mysqli_query($conn, $consulta)) {
         header("Location: administrador.php");
    }
    else {
        echo "Error: " . $consulta . "<br>" . mysqli_error($conn);
    }
  }



  header("Location: administrador.php");




?>
