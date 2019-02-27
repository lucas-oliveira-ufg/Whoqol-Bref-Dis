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




<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">

		<script type="text/javascript">
function marcar_bref(form) {

  var check = document.getElementsByName("group4"),
	    checkbox = document.form.elements;

  //If the first radio is checked
	if (check[0].checked) {

		for( i = 0; i < checkbox.length; i++ ) {

      //And the elements are radios
			if( checkbox[i].type == "checkbox" ) {

				if (checkbox[i].value == 1 ) {checkbox[i].checked = true;} if (checkbox[i].value == 2 ) {checkbox[i].checked = true;} if (checkbox[i].value == 3 ) {checkbox[i].checked = true;}
				if (checkbox[i].value == 4 ) {checkbox[i].checked = true;} if (checkbox[i].value == 5 ) {checkbox[i].checked = true;} if (checkbox[i].value == 6 ) {checkbox[i].checked = true;}
	      if (checkbox[i].value == 7 ) {checkbox[i].checked = true;} if (checkbox[i].value == 8 ) {checkbox[i].checked = true;} if (checkbox[i].value == 9 ) {checkbox[i].checked = true;}
	      if (checkbox[i].value == 10 ) {checkbox[i].checked = true;} if (checkbox[i].value == 11 ) {checkbox[i].checked = true;} if (checkbox[i].value == 12 ) {checkbox[i].checked = true;}
	      if (checkbox[i].value == 13 ) {checkbox[i].checked = true;} if (checkbox[i].value == 14 ) {checkbox[i].checked = true;} if (checkbox[i].value == 15 ) {checkbox[i].checked = true;}
				if (checkbox[i].value == 16 ) {checkbox[i].checked = true;} if (checkbox[i].value == 17 ) {checkbox[i].checked = true;} if (checkbox[i].value == 18 ) {checkbox[i].checked = true;}
				if (checkbox[i].value == 19 ) {checkbox[i].checked = true;} if (checkbox[i].value == 20 ) {checkbox[i].checked = true;} if (checkbox[i].value == 21 ) {checkbox[i].checked = true;}
	      if (checkbox[i].value == 22 ) {checkbox[i].checked = true;} if (checkbox[i].value == 23 ) {checkbox[i].checked = true;} if (checkbox[i].value == 24 ) {checkbox[i].checked = true;}
	      if (checkbox[i].value == 25 ) {checkbox[i].checked = true;} if (checkbox[i].value == 26 ) {checkbox[i].checked = true;} if (checkbox[i].value == 27 ) {checkbox[i].checked = false;}
	      if (checkbox[i].value == 28 ) {checkbox[i].checked = false;} if (checkbox[i].value == 29 ) {checkbox[i].checked = false;} if (checkbox[i].value == 30 ) {checkbox[i].checked = false;}
				if (checkbox[i].value == 31 ) {checkbox[i].checked = false;} if (checkbox[i].value == 32 ) {checkbox[i].checked = false;} if (checkbox[i].value == 33 ) {checkbox[i].checked = false;}
				if (checkbox[i].value == 34 ) {checkbox[i].checked = false;} if (checkbox[i].value == 35 ) {checkbox[i].checked = false;} if (checkbox[i].value == 36 ) {checkbox[i].checked = false;}
	      if (checkbox[i].value == 37 ) {checkbox[i].checked = false;} if (checkbox[i].value == 38 ) {checkbox[i].checked = false;} if (checkbox[i].value == 39 ) {checkbox[i].checked = false;}
				if (checkbox[i].value == 40 ) {checkbox[i].checked = false;} if (checkbox[i].value == 41 ) {checkbox[i].checked = false;} if (checkbox[i].value == 42 ) {checkbox[i].checked = false;}
				if (checkbox[i].value == 43 ) {checkbox[i].checked = false;} if (checkbox[i].value == 44 ) {checkbox[i].checked = false;} if (checkbox[i].value == 45 ) {checkbox[i].checked = false;}
	      if (checkbox[i].value == 46 ) {checkbox[i].checked = false;} if (checkbox[i].value == 47 ) {checkbox[i].checked = false;} if (checkbox[i].value == 48 ) {checkbox[i].checked = false;}
				if (checkbox[i].value == 49 ) {checkbox[i].checked = false;} if (checkbox[i].value == 50 ) {checkbox[i].checked = false;} if (checkbox[i].value == 51 ) {checkbox[i].checked = false;}
				if (checkbox[i].value == 52 ) {checkbox[i].checked = false;} if (checkbox[i].value == 53 ) {checkbox[i].checked = false;} if (checkbox[i].value == 54 ) {checkbox[i].checked = false;}
	      if (checkbox[i].value == 55 ) {checkbox[i].checked = false;} if (checkbox[i].value == 56 ) {checkbox[i].checked = false;} if (checkbox[i].value == 57 ) {checkbox[i].checked = false;}
	      if (checkbox[i].value == 58 ) {checkbox[i].checked = false;} if (checkbox[i].value == 59 ) {checkbox[i].checked = false;} if (checkbox[i].value == 60 ) {checkbox[i].checked = false;}
	      if (checkbox[i].value == 61 ) {checkbox[i].checked = false;} if (checkbox[i].value == 62 ) {checkbox[i].checked = false;} if (checkbox[i].value == 63 ) {checkbox[i].checked = false;}
				if (checkbox[i].value == 64 ) {checkbox[i].checked = false;} if (checkbox[i].value == 65 ) {checkbox[i].checked = false;} if (checkbox[i].value == 66 ) {checkbox[i].checked = false;}
				if (checkbox[i].value == 67 ) {checkbox[i].checked = false;} if (checkbox[i].value == 68 ) {checkbox[i].checked = false;} if (checkbox[i].value == 69 ) {checkbox[i].checked = false;}
	      if (checkbox[i].value == 70 ) {checkbox[i].checked = false;} if (checkbox[i].value == 71 ) {checkbox[i].checked = false;} if (checkbox[i].value == 72 ) {checkbox[i].checked = false;}
	      if (checkbox[i].value == 73 ) {checkbox[i].checked = false;} if (checkbox[i].value == 74 ) {checkbox[i].checked = false;} if (checkbox[i].value == 75 ) {checkbox[i].checked = false;}
	      if (checkbox[i].value == 76 ) {checkbox[i].checked = false;} if (checkbox[i].value == 77 ) {checkbox[i].checked = false;} if (checkbox[i].value == 78 ) {checkbox[i].checked = false;}
				if (checkbox[i].value == 79 ) {checkbox[i].checked = false;} if (checkbox[i].value == 80 ) {checkbox[i].checked = false;} if (checkbox[i].value == 81 ) {checkbox[i].checked = false;}
				if (checkbox[i].value == 82 ) {checkbox[i].checked = false;} if (checkbox[i].value == 83 ) {checkbox[i].checked = false;} if (checkbox[i].value == 84 ) {checkbox[i].checked = false;}
	      if (checkbox[i].value == 85 ) {checkbox[i].checked = false;} if (checkbox[i].value == 86 ) {checkbox[i].checked = false;} if (checkbox[i].value == 87 ) {checkbox[i].checked = false;}
				if (checkbox[i].value == 88 ) {checkbox[i].checked = false;} if (checkbox[i].value == 89 ) {checkbox[i].checked = false;} if (checkbox[i].value == 90 ) {checkbox[i].checked = false;}
				if (checkbox[i].value == 91 ) {checkbox[i].checked = false;} if (checkbox[i].value == 92 ) {checkbox[i].checked = false;} if (checkbox[i].value == 93 ) {checkbox[i].checked = false;}
	      if (checkbox[i].value == 94 ) {checkbox[i].checked = false;} if (checkbox[i].value == 95 ) {checkbox[i].checked = false;} if (checkbox[i].value == 96 ) {checkbox[i].checked = false;}
				if (checkbox[i].value == 97 ) {checkbox[i].checked = false;} if (checkbox[i].value == 98 ) {checkbox[i].checked = false;} if (checkbox[i].value == 99 ) {checkbox[i].checked = false;}
	      if (checkbox[i].value == 100 ) {checkbox[i].checked = false;}

			}//if

		}//for

  //If the second radio is checked
} else {
	for( i = 0; i < checkbox.length; i++ ) {

		//And the elements are radios
		if( checkbox[i].type == "checkbox" ) {

			if (checkbox[i].value == 1 ) {checkbox[i].checked = true;} if (checkbox[i].value == 2 ) {checkbox[i].checked = true;} if (checkbox[i].value == 3 ) {checkbox[i].checked = true;}
			if (checkbox[i].value == 4 ) {checkbox[i].checked = true;} if (checkbox[i].value == 5 ) {checkbox[i].checked = true;} if (checkbox[i].value == 6 ) {checkbox[i].checked = true;}
			if (checkbox[i].value == 7 ) {checkbox[i].checked = true;} if (checkbox[i].value == 8 ) {checkbox[i].checked = true;} if (checkbox[i].value == 9 ) {checkbox[i].checked = true;}
			if (checkbox[i].value == 10 ) {checkbox[i].checked = true;} if (checkbox[i].value == 11 ) {checkbox[i].checked = true;} if (checkbox[i].value == 12 ) {checkbox[i].checked = true;}
			if (checkbox[i].value == 13 ) {checkbox[i].checked = true;} if (checkbox[i].value == 14 ) {checkbox[i].checked = true;} if (checkbox[i].value == 15 ) {checkbox[i].checked = true;}
			if (checkbox[i].value == 16 ) {checkbox[i].checked = true;} if (checkbox[i].value == 17 ) {checkbox[i].checked = true;} if (checkbox[i].value == 18 ) {checkbox[i].checked = true;}
			if (checkbox[i].value == 19 ) {checkbox[i].checked = true;} if (checkbox[i].value == 20 ) {checkbox[i].checked = true;} if (checkbox[i].value == 21 ) {checkbox[i].checked = true;}
			if (checkbox[i].value == 22 ) {checkbox[i].checked = true;} if (checkbox[i].value == 23 ) {checkbox[i].checked = true;} if (checkbox[i].value == 24 ) {checkbox[i].checked = true;}
			if (checkbox[i].value == 25 ) {checkbox[i].checked = true;} if (checkbox[i].value == 26 ) {checkbox[i].checked = true;} if (checkbox[i].value == 27 ) {checkbox[i].checked = true;}
			if (checkbox[i].value == 28 ) {checkbox[i].checked = true;} if (checkbox[i].value == 29 ) {checkbox[i].checked = true;} if (checkbox[i].value == 30 ) {checkbox[i].checked = true;}
			if (checkbox[i].value == 31 ) {checkbox[i].checked = true;} if (checkbox[i].value == 32 ) {checkbox[i].checked = true;} if (checkbox[i].value == 33 ) {checkbox[i].checked = true;}
			if (checkbox[i].value == 34 ) {checkbox[i].checked = true;} if (checkbox[i].value == 35 ) {checkbox[i].checked = true;} if (checkbox[i].value == 36 ) {checkbox[i].checked = true;}
			if (checkbox[i].value == 37 ) {checkbox[i].checked = true;} if (checkbox[i].value == 38 ) {checkbox[i].checked = true;} if (checkbox[i].value == 39 ) {checkbox[i].checked = true;}
			if (checkbox[i].value == 40 ) {checkbox[i].checked = true;} if (checkbox[i].value == 41 ) {checkbox[i].checked = true;} if (checkbox[i].value == 42 ) {checkbox[i].checked = true;}
			if (checkbox[i].value == 43 ) {checkbox[i].checked = true;} if (checkbox[i].value == 44 ) {checkbox[i].checked = true;}
		}//if

	}//for
}
}
</script>







    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!--- Include the above in your HEAD tag ---------->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

  </head>

  <body>

    <?php
        $consulta = "SELECT * FROM questoes";
        $questoes_consulta = $conn->query($consulta);
  			$questoes = $questoes_consulta->fetch_assoc();


  			$result = mysqli_query($conn, $consulta);

  			$num_linhas = mysqli_num_rows($result); // armazena a quantidade de questionários de um pesquisador

  		//	echo $num_linhas;

     ?>




  <div class="container">
  	<div class="row">
			<form name="form" method="post" action="salvar_questoes_questionario.php">


          <div class="col-md-12">
          <h4><?php echo $_SESSION['usuario_nome']; ?>, escolha o tipo de seu questionário</h4>
          <div class="table-responsive">


                <table id="mytable" class="table table-bordred table-striped">


      <tbody>


					<thead>

					<th><input type="radio" name="group4" value="1" onclick="marcar_bref(form)" /></th>
					<th>Whoqol-Bref</th>

					</thead>

					<thead>
						<th><input type="radio" name="group4" value="0" onclick="marcar_bref(form)" /></th>
						<th>Whoqol-Dis</th>
				 </thead>

				 <button align="center" type="submit" class="btn btn-primary">Salvar</button>


        <?php
            if ($num_linhas > 0) {
                while ($num_linhas = mysqli_fetch_array($result)) {
                		echo "<tr hidden>";
				?>
										<td hidden> <input type="checkbox" class="checkthis" name="checked[]" value="<?php echo $num_linhas['id_questao']; ?>" /></td>
                  <!--  <td> <a href="id_checkbox = >"> <input type="checkbox" class="checkthis" value="1" /></td> -->
				<?php
                    echo "<td hidden>".$num_linhas['id_questao']."</td>";
                    echo "<td hidden>".$num_linhas['texto_questao']."</td>";
		                echo "</tr hidden>";
              }
            }
         ?>
<!--
      <tr>
      <td><input type="checkbox" class="checkthis" /></td>
      <td>Mohsin</td>
      <td>Irshad</td>
      <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
      <td>isometric.mohsin@gmail.com</td>
      <td>+923335586757</td>
      </tr>
-->



      </tbody>

  </table>

</form>

  <div class="clearfix"></div>


              </div>

          </div>
  	</div>
  </div>


  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
        </div>
            <div class="modal-body">
            <div class="form-group">
          <input class="form-control " type="text" placeholder="Mohsin">
          </div>
          <div class="form-group">

          <input class="form-control " type="text" placeholder="Irshad">
          </div>
          <div class="form-group">
          <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


          </div>
        </div>
            <div class="modal-footer ">
          <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
        </div>
          </div>
      <!-- /.modal-content -->
    </div>
        <!-- /.modal-dialog -->
      </div>



      <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
        </div>
            <div class="modal-body">

         <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

        </div>
          <div class="modal-footer ">
          <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
          <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
        </div>
          </div>
      <!-- /.modal-content -->
    </div>
        <!-- /.modal-dialog -->
      </div>
</body>
</html>
