<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<div class="col-md-5">
    <div class="form-area">
        <form role="form" method="post" action="enviar_contato.php">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;"></h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Nome" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Assunto" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Mensagem" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Você tem limite de 140 caracteres</p></span>
                    </div>

        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Enviar mensagem</button>
        </form>
    </div>
</div>
</div>
