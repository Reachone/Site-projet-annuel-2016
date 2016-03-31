<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Transports Nationnaux Indépendants</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="media/logo_tni_1.png">


    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
           <img class="logo_tni" alt="TNI" src="media/logo_tni_1.png">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#" id="title">OFFRES<br>PROFESSIONELLES</a></li>
          <li><a href="#" id="title">EXPEDITION<br> DE COMMANDE</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" id="title" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SUIVI<br> DE LIVRAISON<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Suivi de Livraison</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Suivi de Commande</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">ENTREPRISE</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFIL<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Connexion</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Inscription</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

   <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="media/ad_1.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Pub numéro 1</h1>
              <p>Pub numéro 1</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">lire article</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="media/ad_1.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Pub numéro 2</h1>
              <p>Pub numéro 2</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Lire article</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="media/ad_1.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Pub numéro 3</h1>
              <p>Pub numéro 3</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Lire article</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
    
    
    
    <div class="article"><!-- articles -->
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
            <img src="media/adrian.png" alt="..."  class="tailledebite">
                <div class="caption">
                    <h3>UN RÉSEAU AU TOP!</h3>
                    <p>Chez TNI, nous prenons soin, chaque jour, de tous nos clients à travers l'hexagone.</p>
                    <p><a href="#" class="btn btn-primary" role="button">En savoir +</a></p>
                </div>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
            <img src="media/adrian2.png" alt="..." class="tailledebite">
                <div class="caption">
                    <h3>TNI VOUS DONNE RENDEZ-VOUS SUR SES NOUVEAUX SITES DE DEPOT</h3>
                    <p>Venez nous rendre visite ! Nous vous satisferons au mieux.</p>
                    <p><a href="#" class="btn btn-primary" role="button">En savoir +</a></p>
                </div>
            </div>
        </div>
    </div>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>

  <?php
	include("api_google.php");
	?>

   
   <nav class="navbar-static-bottom">
   <div class="container">
     <footer>
      <div class="row row_footer">
        <div class="col-md-3 col1_footer"></div>
        <div class="col-md-6">
          <p id="copyright">Copyright 2016<br>Site créé par Adrian PETRICEVIC, Gautier GARY, Matthieu DAVY</p>
          <a class="btn btn-default btn_footer1" href="#" role="button">Mentions Légales</a>
          <a class="btn btn-default btn_footer2" href="#" role="button">Conditions d'utilisation</a>
        </div>
        <div class="col-md-3 col3_footer">
          <p class="p_res">Retrouvez-nous sur les réseaux sociaux : </p>
          <a href="#" target="blank"><img src="media/twitter.png" alt="twitter" title="Rejoins nous sur Twitter !" width="60px" class="btn_res1_before"></a>
          <a href="#" target="blank"><img src="media/facebook.png" alt="facebook" title="Rejoins nous sur Facebook !"  width="60px" class="btn_res2_before"></a>
        </div>
      </div>
    </footer>
    </div>
    </nav>
  </html>