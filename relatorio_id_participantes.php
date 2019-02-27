<?php
	// Definição de conexão
	include 'conexao.php';

	// Atribiudindo variáveis de sessão

	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");
		$usuario_id = $_SESSION['usuario_id'];
    $_SESSION['id_quest'] = $_GET['id_quest'];
    $id_quest = $_SESSION['id_quest'];

	}
?>

<?php

$participantes = array();

$usuario = "SELECT DISTINCT respostas.email_participante FROM respostas WHERE respostas.id_questionario_fk = $id_quest";
$usuario_login = $conn->query($usuario);

while ($data = $usuario_login->fetch_assoc()) {
	    array_push($participantes, $data['email_participante']);
}
//$data = $usuario_login->fetch_assoc();

$_SESSION['participante'] = $participantes;

$result = mysqli_query($conn, $usuario);

$num_linhas = mysqli_num_rows($result); // armazena a quantidade de questionários de um pesquisador

//var_dump($_SESSION['participante']);

header("Location: relatorio_respostas.php");


?>
