<html><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Paulo Marcos Soares Rodrigues">
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">


    <title>WHOQOL BREF &amp; DIS ; Versão em LIBRAS</title>

    <!--<script src="i18n/config.json?nocache=123"></script>
    <script src="i18n/bzs/bzs.json?nocache=123"></script>
    <script src="i18n/ase/ase.json?nocache=123"></script>
    <script src="i18n/psr/psr.json?nocache=123"></script>
-->
<script type="text/javascript">

  //var idioma_a_enviar =    function alerta(elemento){
function alerta(elemento){
        var idioma;
        idioma =  elemento.value;
        var valor = document.getElementById('sl-menu').value;
        if (valor == "ase") {
          document.getElementById('recebe_idioma').value = "<?php echo "ase";?>";
        }
        if (valor == "bzs") {
          document.getElementById('recebe_idioma').value = "<?php echo "bzs";?>";
        }
        if (valor == "psr") {
          document.getElementById('recebe_idioma').value = "<?php echo "psr";?>";
        }
      //  document.getElementById('recebe_idioma').innerHTML = idioma;
      //  alert(idioma);
      //  var valor_que_eu_quero_passar = elemento;
        //window.location = "pergunta81.php?minha_Variavel="+elemento;
}


</script>
<script type="text/javascript">function submit_aut(){
  document.form_idioma.submit();
}
</script>

<script src=" PATH-JQUERY/jquery.min.js"></script>
<script src="PATH-JQUERY/signlang.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
  <!--  <link href="font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <!--<link href="css/montserrat.css" rel="stylesheet" type="text/css">-->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!--<link href="css/lato.css" rel="stylesheet" type="text/css">-->
    <link href="estiloSistema.css" rel="stylesheet" type="text/css">
    <link href="simpletabs.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    </head><body class="index" id="page-top">[if lt IE 9]
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <!--<script type="text/javascript" src="js/html5shiv.js"></script>-->
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <!--<script type="text/javascript" src="js/respond.min.js"></script>-->
     [endif]


    <!-- jQuery -->
    <!--<script src="vendor/jquery/jquery.min.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <!--<script src="vendor/bootstrap/js/bootstrap.min.js"></script-->

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!--<script type="text/javascript" src="js/jquery.easing.min.js"></script>-->
    <!-- Contact Form JavaScript -->
    <!--<script src="js/jqBootstrapValidation.js"></script>-->
    <!--<script src="js/contact_me.js"></script>-->

    <!-- Theme JavaScript -->
    <!--<script src="js/freelancer.min.js"></script>
    <script type="text/javascript" src="js/signlang.js"></script>
    <script type="text/javascript" src="js/whoqol.js"></script>
    <script type="text/javascript" src="js/simpletabs_1.3.js"></script>
    <script type="text/javascript" src="js/ufo.js"></script>
    <script type="text/javascript" src="js/swfobject.js"></script>
    <script type="text/javascript" src="js/newframe.js"></script>
-->


<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <img alt="Questionário de Qualidade de Vida" style="border-width:0" src="imagens/logo.jpg" width="100
                " height="50">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden active">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="qualidadedevida.html" target="qualidade">Qualidade de Vida</a>
                    </li>
                    <li class="page-scroll">
                        <a href="instrucoes.html" target="qualidade">Instruções</a>
                    </li>
                    <li class="page-scroll">
                        <a href="pesquisador_questionario.php" target="qualidade">Questionários</a>
                    </li>
                    <li class="page-scroll">
                        <a href="pesquisador.php" target="qualidade">Pesquisador</a>
                    </li>
                    <li class="page-scroll">
                        <a href="sair.php" target="qualidade">Sair</a>
                    </li>
                    <!--<li class="page-scroll">

                        <select name="select_idioma" id="sl-menu" target="qualidade" onchange="alerta(this)">
                        <option value="bzs" selected>Língua Brasileira de Sinais</option>
                        <option value="ase" >American Sing Language</option>
                        <option value="psr" >Língua Gestual Portuguesa</option>
                      </select>
                      <form class="" action="index_hand_talk.php" method="post">
                        <input  id="recebe_idioma" name="idioma_a_enviar" type="text" value=""></input>
                        <button  type="submit">click</button>
                      </form>
                      <div><label style="color:#3e8f3e">Escolha o Idioma</label></div>



                    </li>
                    <li class="page-scroll">
                        <select id="sl-menu-videos" target="videos">
                        <option value="IH">Intérprete Humano</option>
                        <option value="HT">Hand Talk</option>
                      </select><div><label style="color:#3e8f3e">Tipo de Tradução</label></div>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-12 text-center">-->
                    <iframe src="qualidadedevida.html" id="qualidade" name="qualidade" width="100%" height="650px" frameborder="0">  </iframe>
                <!--</div>-->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">
                            <img alt="Licença Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png">
                        </a>
                        <br>Esta obra está licenciada com uma Licença
                        <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">
                            Creative Commons Atribuição-NãoComercial 4.0 Internacional
                        </a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>

<script type="text/javascript">

iframe = document.getElementById("qualidade");
slmenu = document.getElementById("sl-menu");
/*
    iframe = document.getElementById("qualidade");
    slmenu = document.getElementById("sl-menu");
    function aplicaItemSelecionado() {

        $.getJSON('i18n/config.json', function confiJSON (jd) {
            var itemSelecionado = $("#sl-menu").val();


            if (jd.languages[itemSelecionado] != undefined) {

                var p =  jd.languages[itemSelecionado].path;

                $.getJSON(p, function setSignLang (j){
                    var r = $(jQuery("#qualidade").contents().find("iframe"));

                    for (var b = 0; b < r.length; b++) {
                        var at = r[b];
                        var i18n = at.getAttribute('signlang');
                        var w = i18n.split(".");
                        var x = null;
                        for (i = 0; i < w.length; i++) {
                            if(x===null){
                                x = j[w[i]];
                            }else{
                                x = x[w[i]];
                            }
                        }
                        var video = x;
                        at.setAttribute('src', video);
                    }
                });
            } else {
                $(jQuery("#qualidade").contents().find("iframe")).hide();
                $(jQuery("#qualidade").contents().reload(true));
                //// hide
            }
        });
    };

    iframe.onload = function() {
     aplicaItemSelecionado();

    }
*/
</script>




</body></html>
