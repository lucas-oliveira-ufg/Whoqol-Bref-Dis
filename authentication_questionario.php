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
          setTimeout("window.location.href='pesquisador_questionario.php'", 2000);
      }

    </script>

  </head>


</html>




<?php
// Definição de conexão
include 'conexao.php';


 /*else{
echo "conectado";
}*/
// Atribiudindo variáveis de sessão
$nome_questionario = $_POST['nome_questionario'];
$email_participante = $_POST['email_participante'];
// Consulta
$sql = "SELECT * FROM questionario WHERE nome_questionario = '$nome_questionario'";
$result = $conn->query($sql);
$result_2 = $result->fetch_assoc();

$resultado = mysqli_query($conn, $sql);
$num_linhas = mysqli_num_rows($resultado);


//echo "$num_linhas['email']";

//Retrono da consulta = Se possitovo starta a conexão e redireciona
if ($num_linhas > 0) //Se for maior do que 0, então o usuáiro é autenticado e é aberta uma sessão para ele
{
  session_start();
  $_SESSION['nome_questionario'] = $_POST['nome_questionario'];
  $_SESSION['email_participante'] = $_POST['email_participante'];

  $consulta = "SELECT id_questionario, id_pesquisador_fk, quant_questoes, nome_questionario, estado, nome
               FROM questionario, cadastro, pesquisador
               WHERE questionario.nome_questionario LIKE '$nome_questionario'
                     AND pesquisador.id_pesquisador = questionario.id_pesquisador_fk
                     AND cadastro.id_usuario = pesquisador.id_usuario_fk LIMIT 1"; //provavelmente fazer inner join
  $questoes_consulta = $conn->query($consulta);
  $questoes = $questoes_consulta->fetch_assoc();


  $_SESSION['id_quest'] = $questoes['id_questionario'];
  $_SESSION['nome_quest'] = $questoes['nome_questionario'];
  $_SESSION['id_pesq'] = $questoes['id_pesquisador_fk'];
  $_SESSION['tipo_questionario'] = $questoes['quant_questoes'];

  //echo $_SESSION['nome_quest'];
  //echo $_SESSION['id_pesq'];
  //echo $_SESSION['tipo_questionario'];

  $result = mysqli_query($conn, $consulta);

  $num_linhas = mysqli_num_rows($result); // armazena a quantidade de questionários de um pesquisador

  header("Location: responder.php");

}




?>

<html>

  <head>

    <script type="text/javascript">

    function no_quest() {

      window.alert("Questionário não encontrado. Por favor verifique se o nome foi digitado corretamente.");
      setTimeout("window.location.href='pesquisador_questionario.php'", 1000);
    }


    </script>

  </head>

  <body>

  </body>

</html>

<?php

if ($num_linhas < 1) {

  echo "<script>no_quest()</script>";

}

?>
