<?php
	// Definição de conexão
	include 'conexao.php';

	// Atribiudindo variáveis de sessão

	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");

    $id = $_POST['id_usuario'];
    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $senha_usuario = $_POST['senha_usuario'];
    $nivel = $_POST['nivel'];


    $sql = "UPDATE cadastro SET nome = '$nome_usuario', email = '$email_usuario', senha = '$senha_usuario',
                   nivel_acesso = '$nivel' WHERE cadastro.id_usuario = '$id'";

    if (mysqli_query($conn, $sql)) {
      echo "<script>sucesso()</script>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      //mysqli_close($conn);
	}



  header("Location: administrador.php");




?>

<html>

 <head>

   <script type="text/javascript">

     function sucesso()  //Caso o login seja realizado, o usuário é direcionado a termos e condições
     {
           alert("Cadastro alterado com sucesso :D");

     }

     </script>

 </head>

 <body>


</body>
</html>
