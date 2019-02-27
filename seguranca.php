<?php

  ob_start();
  if (($_SESSION['usuario_id'] == "") || ($_SESSION['usuario_nome'] == "") || ($_SESSION['usuario_nivel'] == "") || ($_SESSION['emailPesq']) || ($_SESSION['pass'])) {
      header("Location: pesquisador.php");
  }

?>
