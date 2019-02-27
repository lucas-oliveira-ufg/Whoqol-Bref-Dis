<html>

  <head>

    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
    </script>

    <script type="text/javascript">

      function login_success()  //Caso o login seja realizado, o usuário é direcionado a termos e condições
      {
            setTimeout("window.location.href='termos_condicoes.php'", 2000);

      }

      function login_failed() //Caso o login não seja realizado, o usuário volta para pesquisador.html
      {
          window.alert("Nome de Usuário ou Senha Inválidos");
          setTimeout("window.location.href='pesquisador.php'", 2000);
      }

    </script>

  </head>


</html>



<?php
// Definição de conexão
 include 'conexao.php';
// Atribiudindo variáveis de sessão
$emailPesq = $_POST['emailPesq'];
$pass = $_POST['pass'];
// Consulta
$sql = "SELECT * FROM cadastro WHERE email = '$emailPesq' and senha = '$pass'";
$result = $conn->query($sql);
$result_2 = $result->fetch_assoc();

$resultado = mysqli_query($conn, $sql);
$num_linhas = mysqli_num_rows($resultado);


//echo "$num_linhas['email']";

//Retrono da consulta = Se possitovo starta a conexão e redireciona
if ($num_linhas > 0) //Se for maior do que 0, então o usuáiro é autenticado e é aberta uma sessão para ele
{
  session_start();
  $_SESSION['emailPesq'] = $_POST['emailPesq'];
  $_SESSION['pass'] = $_POST['pass'];
  $usuario = "SELECT * FROM cadastro WHERE email = '$emailPesq' and senha = '$pass'";
  $usuario_login = $conn->query($usuario);
  $data = $usuario_login->fetch_assoc();




  echo "$data";

  //echo "Você foi autenticado";

  $_SESSION['usuario_nome'] = $data['nome'];   // Define os valores atribuídos a sessão do usuário

  $_SESSION['usuario_email'] = $data['email'];

  $_SESSION['usuario_nivel'] = $data['nivel_acesso'];

  $_SESSION['usuario_id'] = $data['id_usuario'];



  if ($_SESSION['usuario_nivel'] == 1) {
    header("Location: termos_condicoes.php");
  }else if ($_SESSION['usuario_nivel'] == 2) {
    header("Location: usuario.php");
    echo "<script>login_failed()</script>";
  }else if ($_SESSION['usuario_nivel'] == 3) {
    header("Location: administrador.php");
    echo "<script>login_failed()</script>";
  }{
    // code...
  }

  //echo "<script>login_success()</script>";
} else {  //Caso for menor do que 0, o usuário é redirecionado para a mesma página, para realizar o login novamente
    echo "<script>login_failed()</script>";
}



// $sql = "SELECT * FROM Pesquisador";
// $result = $conn->query($sql);
//
// if ($result->num_rows > 0) {
// // output data of each row
// while($row = $result->fetch_assoc()) {
//   echo "id: " . $row["Id"]. " - Name: " . $row["Email"]. " " . $row["Senha"]. "<br>";
// }
// } else {
// echo "0 results";
// }
// $conn->close();

?>


<?php
//
// $sql = mysql_query("SELECT * FROM Pesquisador WHERE Email = '$emailPesq' and Senha = '$pass'"); //Verifica se existe o usuário e senha no banco de dados
// $row = mysql_num_rows($sql); //Conta a quantidade de linhas selecionadas no banco de dados


?>
