<?php
	// Definição de conexão
	include 'conexao.php';

	// Atribiudindo variáveis de sessão

	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");

    $idioma = $_POST["idioma_a_enviar"];


    $sql = "UPDATE `idioma` SET `idioma_value` = '$idioma' WHERE `idioma`.`id_idioma` = 1";


		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		header("Location: index_hand_talk.php");


  //  $consulta = "UPDATE idioma SET idioma_value = '$idioma' WHERE idioma.id_idioma = 1";



//    $estado_questionario = $_POST['label_estado_questionario'];




?>
