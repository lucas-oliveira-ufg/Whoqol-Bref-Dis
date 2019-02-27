<?php
	// Definição de conexão
	include 'conexao.php';

	// Atribiudindo variáveis de sessão

	//Iniciando a sessão:
	if (session_status() !== PHP_SESSION_ACTIVE) {
	  session_start();
		//include_once("seguranca.php");
		$usuario_id = $_SESSION['usuario_id'];



	}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="adm/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <h4><?php echo $_SESSION['usuario_nome']; ?>, Digite os dados do usuário</h4>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Nível de Acesso</span>
            <span class="badge badge-secondary badge-pill">Id</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Pesquisador</h6>
                <small class="text-muted">Cria Questionários</small>
              </div>
              <span class="text-muted">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Participante</h6>
                <small class="text-muted">Responde Questionários</small>
              </div>
              <span class="text-muted">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Administrador</h6>
                <small class="text-muted">Insere, Altera e/ou Deleta Usuários</small>
              </div>
              <span class="text-muted">3</span>
            </li>

          </ul>

        </div>
        <div class="col-md-8 order-md-1">

          <form method="post" action="salva_insercao.php" class="needs-validation" novalidate>

            <div class="mb-3">
              <label for="username">Nome do Usuário</label>
              <div class="input-group">
                <input type="text" class="form-control" id="username" name="nome_usuario" placeholder="Nome do Usuário" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email_usuario"  placeholder="Email">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Senha</label>
              <input type="text" class="form-control" id="email" name="senha_usuario" placeholder="Senha">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Nível de Acesso</label>
              <input type="number" class="form-control" id="address" name="nivel" placeholder="Nível de Acesso" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <button align='center' type='submit' class='btn btn-primary'>Salvar</button>


          </form>


          </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="adm/popper.min.js"></script>
    <script src="adm/bootstrap.min.js"></script>

    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
