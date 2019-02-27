<?php
	// Definição de conexão
	$user = 'root';
	$password = 'root';
	$db = 'sistema_whoq';
	$host = 'localhost';
	$port = 3306;
	//Conectando...
	$conn = mysqli_connect($host,$user,$password,$db);
	// Status da conexão
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// Atribiudindo variáveis de sessão

	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $assunto = $_POST['subject'];
    $mensagem = $_POST['message'];



    $sql = "INSERT INTO contato (id_contato, nome, email, assunto, mensagem)
		        VALUES (DEFAULT, '$nome', '$email', '$assunto', '$mensagem')";

    if (mysqli_query($conn, $sql)) {
      echo "<script>alerta()</script>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      //mysqli_close($conn);
	}

?>

<html>

  <header>

      <script type="text/javascript">

          window.alert("Mensagem enviada com sucesso!");
          setTimeout("window.location.href='contato.php'", 1000);

      </script>


  </header>

</html>
