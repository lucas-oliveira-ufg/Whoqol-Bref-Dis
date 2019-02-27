<?php
  session_start();
  session_destroy();

  unset($_SESSION['usuario_id'],
        $_SESSION['usuario_nome'],
        $_SESSION['usuario_nivel'],
        $_SESSION['emailPesq'],
        $_SESSION['pass']);

  header("Location: qualidadedevida.html");        

?>
