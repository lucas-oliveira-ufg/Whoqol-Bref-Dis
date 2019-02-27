<?php
	// Definição de conexão
	include 'conexao.php';


	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");
		$participante_id = $_SESSION['participante_id'];
    $id_pesq = $_SESSION['id_pesq'];
    $id_quest = $_SESSION['id_quest'];
		$tipo_questionario = $_SESSION['tipo_questionario'];

		echo "$tipo_questionario";

		if ($tipo_questionario === 'Whoqol-Bref') {

			header("Location: whoqol_bref/termos_cond.html");


		}

		if ($tipo_questionario === 'Whoqol-Dis') {
		   header("Location: whoqol_dis/termos_cond_dis.html");
		}


	}
?>
