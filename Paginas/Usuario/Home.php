<html>
    <head>
        <title>Vida Saudavel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/style.css" rel="stylesheet">
        <script src="../../Bootstrap/jquery/jquery.min.js"></script>
        <link  href='../../fullcalendar-3.9.0/fullcalendar.min.css' rel="stylesheet">
        <link  href='../../fullcalendar-3.9.0/fullcalendar.print.min.css'  rel="stylesheet" media='print'>
        <script src='../../fullcalendar-3.9.0/lib/moment.min.js'></script>
        <script src='../../fullcalendar-3.9.0/lib/jquery.min.js'></script>
        <script src='../../fullcalendar-3.9.0/fullcalendar.min.js'></script>
        <script src="../../js/Calendario.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="#">Vida Saudavel</a>
                    </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Agendar Consulta</a></li>
                        <li><a href="#">Desmarcar Consulta</a></li>
                        
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="../../imagens/usuarioDefault.jpg" class="img-circle" style="width:30px; height:30px;"> <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Sair</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>
        <div id="calendar"></div>
                
        <script src="../../Bootstrap/js/bootstrap.js"></script>
        
    </body>
</html>