<html>
    <head>
        <title>Vida Saudavel</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../Bootstrap/js/bootstrap.min.js">
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    </head>
    <body data-spy="scroll" data-target="meunav">
        <nav class="navbar navbar-default navbar-fixed-top" id="meunav" data-spy="affix" data-offset-top="50" >
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		    </div>
		    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="#quemSomos"><span class="spanMenu">Quem somos</span></a></li>
		        <li><a href="#servicos"><span class="spanMenu">Serviços</span></a></li>
				<li><a href="#Localizacao"><span class="spanMenu">Localização</span></a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                      <img src="../imagens/carrosel5.jpg" class="imagemfundo" alt="...">
                      <div class="carousel-caption">
                         <h1 id="vida" class="wow bounceInLeft">Vida Saudável</h1> 
                         <a><button type="button" class=" btn btnConsulta btn-default btn-lg wow bounceInUp" data-wow-duration="2s" data-wow-delay="1s" data-toggle="modal" data-target="#logarCliente"><span class="glyphicon glyphicon-calendar"></span> consulta </button></a>
                      </div>
                  
                </div>
                
                <div class="item " >
                    <img src="../imagens/carrosel6.jpg" class="imagemfundo" alt="...">
                    <div class="carousel-caption">
                        <h1 id="vida" class="animated bounceInLeft">Serviços online </h1> 
                        <h2  class="wow bounceInUp" data-wow-delay="2s" data-wow-duration="1s">prontuário online 24 horas  </h2> 
                        <a><button type="button" class=" btn btnConsulta btn-default btn-lg wow bounceInUp" data-wow-duration="2 data-wow-delay="0.5s"s" data-wow-delay="2s" data-toggle="modal" data-target="#logarCliente"><span class="glyphicon glyphicon-calendar"></span> consulta </button></a>
                    </div>
                  
                </div>
              </div>
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
        
        <section id="quemSomos">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2>Quem Somos</h2>
                        </div>
                        <div class="col-md-8  col-sm-8">
                            <h2>Clinica Vida Saudável</h2>
                            <p class="texto-padrao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent maximus malesuada odio, non vulputate arcu sodales vel. Vivamus et nisl porttitor, hendrerit nibh id, ullamcorper quam. Nullam eleifend rhoncus enim, vel tincidunt nulla feugiat sit amet. Integer facilisis vehicula ligula, eu fringilla risus viverra vel. Morbi et suscipit orci. Curabitur tristique nec ligula sit amet ultrices. Mauris nisi magna, commodo vel ultricies aliquam, consectetur id turpis. In sodales dolor elit, sit amet malesuada lacus pharetra ut. Aliquam sodales, quam id mattis ullamcorper, erat nisl tempus diam, a pulvinar velit urna sit amet mi. Nullam eget aliquam sem.</p>
                        </div>
                        <div class="col-md-4 col-sm-5">
                            <div class="text-center wow bounceInRight" data-wow-duration="1.5s">
                                <img src="../imagens/quemsomos.png" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="servicos" style="background-color: #e3dfdf;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Serviços</h2>
                            <h4>Oferecemos serviços de qualidade para todos nossos clientes</h4>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4 col-sm-6 col-xs-6" >
                            <div class="imagemServico  wow bounceInleft" data-wow-duration="1.5s">
                                <img src="../imagens/servico.jpg" class=" img-responsive img-thumbnail">
                                <h4>Nome do Serviço</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6" >
                            <div class="imagemServico  wow bounceIn" data-wow-duration="1.5s">
                                <img src="../imagens/servico.jpg" class="img-responsive img-thumbnail ">
                                <h4>Nome do Serviço</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6" >
                            <div class="imagemServico  wow bounceInRight" data-wow-duration="1.5s">
                                <img src="../imagens/servico.jpg" class="img-responsive img-thumbnail">
                                <h4>Nome do Serviço</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6" >
                            <div class="imagemServico wow bounceInleft"  data-wow-duration="1.5s">
                                <img src="../imagens/servico.jpg" class="img-responsive img-thumbnail">
                               <h4>Nome do Serviço</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6" >
                            <div class="imagemServico wow bounceIn"  data-wow-duration="1.5s">
                                <img src="../imagens/servico.jpg" class="img-responsive img-thumbnail">
                                <h4>Nome do Serviço</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6" >
                            <div class="imagemServico wow bounceIn"  data-wow-duration="1.5s">
                                <img src="../imagens/servico.jpg" class="img-responsive img-thumbnail">
                                <h4>Nome do Serviço</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <center><a><button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#logarCliente">Ver mais </button></a></center>
            <br>
        </section>
        <br>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2 style="color: #000000">Mensagem de clientes</h2><br>  
                        </div>
                    </div>
                <div class="container mensagens">
                  <!-- Three columns of text below the carousel -->
                      <div class="row">
                        <div class="col-lg-4">
                          <img class="img-circle" src="../imagens/usuarioDefault.jpg" width="140" height="140">
                          <h2>Nome Usuario</h2>
                          <p class="texto-padrao">"Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi "</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                          <img class="img-circle" src="../imagens/usuarioDefault.jpg" width="140" height="140">
                          <h2>Nome Usuario</h2>
                          <p class="texto-padrao">"Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus"</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                          <img class="img-circle" src="../imagens/usuarioDefault.jpg" width="140" height="140">
                          <h2>Nome Usuario</h2>
                          <p class="texto-padrao">"Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper."</p>
                        </div><!-- /.col-lg-4 -->
                      </div><!-- /.row -->
                    </div><!-- /.container -->     
                </div>
            </div>
        </section><br><br>
        <section class="place">
            <div class="container-fluid">
            <ul class="place-showcase"><!-- showcase = mostruario-->
                <li>
                    <figure class="place-photo wow bounceInLeft" data-wow-delay="1s" >
                        <img src="../imagens/lugar1.jpg">
                    </figure>
                </li>
                <li>
                    <figure class="place-photo wow bounceInLeft " data-wow-delay="1s" data-wow-duration="2s">
                        <img src="../imagens/lugar2.jpg">
                    </figure>
                </li>
                <li>
                    <figure class="place-photo wow bounceInLeft" data-wow-delay="1s" data-wow-duration="3s">
                        <img src="../imagens/lugar3.jpg">
                    </figure>
                </li>
                <li>
                    <figure class="place-photo wow bounceInLeft" data-wow-delay="1s" data-wow-duration="4s">
                        <img src="../imagens/lugar4.jpg">
                    </figure>
                </li>
                <li>
                    <figure class="place-photo wow bounceInRight" data-wow-delay="1s" data-wow-duration="1s">
                        <img src="../imagens/lugar5.jpg">
                    </figure>
                </li>
                <li>
                    <figure class="place-photo wow bounceInRight" data-wow-delay="1s" data-wow-duration="2s">
                        <img src="../imagens/lugar6.jpg">
                    </figure>
                </li>
                <li>
                    <figure class="place-photo wow bounceInRight" data-wow-delay="1s" data-wow-duration="3s">
                        <img src="../imagens/lugar7.jpg">
                    </figure>
                </li>
                <li>
                    <figure class="place-photo wow bounceInRight" data-wow-delay="1s" data-wow-duration="4s">
                        <img src="../imagens/lugar8.jpg">
                    </figure>
                </li>
            </ul>
                </div>
        </section><br><br>
        
        <section id="Localizacao">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h2 style="color: #000000">Localização</h2><br>  
                            </div>
                        </div>
                        <div class="col-md-7 ">
                            <div class="container-fluid">
                                <iframe class=" col-xs-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.185282638754!2d-38.613419185508384!3d-3.7697997972574258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74c87a2aaaaab%3A0x658974d8fcc58ae3!2sEEEP+PROFESSOR+C%C3%89SAR+CAMPELO!5e0!3m2!1spt-BR!2sbr!4v1521354498746"  width= "90%;" height="350"></iframe>
                                <div>
                                </div>
                            </div>
                        </div>
                        <div id="contato-clinica" class="col-md-4 col-md-offset-1">
                            <center>
                            <h3>CLinica Vida Saudável</h3><br>
                            <h4><img src="../imagens/whatsapp-logo.png"> Telefone 1 : (85)999-999-999</h4><br>
                            <h4><img src="../imagens/whatsapp-logo.png"> Telefone 2 : (85)999-999-999</h4><br>
                            <h4> ClinicaSaudavel@gmail.com</h4><br>
                            <h4>Rua afjohsdfjksdhfjdh</h4></center>
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br><br>
        <footer style="background-color: dimgray"><br>
            <center><img src="../imagens/redeSociais.png" style="height=30px ; width: 300px"></center>
            <center><span style="color:white">Site desenvolvidor por (nome da Empresa )</span></center>
            <center><span style="color:white">Clinica Vida Saudavel</span></center>
            <center><span style="color:white">Todos direitos resevados</span></center><br>
            
        </footer>
        <script src="../Bootstrap/jquery/jquery.min.js"></script>        
        <script src="../Bootstrap/js/bootstrap.js"></script>
        <script src="../js/wow.min.js"></script>
        <script>
            new WOW().init()
        </script>
        <?php
            include_once "modal.html";
        ?>
    </body>
</html>