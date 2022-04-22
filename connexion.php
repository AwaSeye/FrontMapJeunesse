<?php
  include("fonctions.php");

  

  if(isset($_POST["submit"]))
  {
      $url = $api_url."/api/signin"; // url de l'api à récuperer ....
      
      $login = $_POST["login"];
      $password = $_POST["password"];

      $execution =  HandleLogin($url , $login , $password);
      echo $execution ;

  }

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <title>MapJeunesse</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
       }
      body{
           background: rgb(219, 226, 226);
          }
      .formulaire{
                  background: rgb(241, 236, 236);
                  border-radius: 30px;
                  box-shadow: 12px 12px 22px gray;
                 }
      img{
          border-top-left-radius: 30px;
          border-bottom-left-radius: 30px;
         }
      .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
           }
      .btn1:hover{
                  background: white;
                  border: 1px solid;
                  color: black;
                 }

    </style>
<!--
TemplateMo 551 Stand Blog
https://templatemo.com/tm-551-stand-blog
-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand rows" href="index.php"> <h2>Map Jeunesse <i class="fa fa-graduation-cap" aria-hidden="true"><em></em></i> </h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Accueil
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="services.php">Nos services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="forum.php">Forum</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="connexion.php">LogIn</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Connectez-vous</h4>
                <h2>Bienvenue sur la plateforme MapJeunesse!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
      <br>

  <section class="Form">
    <div class="container Form d-flex align-items-center justify-content-center">
      <div class="row no-gutters formulaire">
        <div class="col-lg-5">
          <img src="assets/images/log.jpeg" alt="" height="100%" width="100%"> 
        </div>
        <div class="col-lg-7 px-5 pt-5">
          <h1 class="font-weight-bold py-3">Connexion</h1>
          <h4>Utilisez votre compte svp!</h4><br>
          <form action = "connexion.php" method="post">
             <div class="row">
               <div class="col-lg-7">
                  <input type="text" placeholder="login" class="form-control" name="login" required>
               </div>
             </div>
             <div class="row">
              <div class="col-lg-7"><br>
                 <input type="password" placeholder="mot de passe" class="form-control" name="password" required>
              </div>
             </div>
             <div class="row">
              <div class="col-lg-7"><br>
                <button type="submit" name="submit" class="btn1 mt-3 mb-5 w-100">Valider</button>
              </div>
             </div>
             <div class="row">
              <a href="#" class="col-lg-7">Mot de passe oublié?</a>
              <p class="col-lg-7">Vous n'avez pas de compte ? <a href="inscription.php">Inscrivez-vous ici!</a></p></div>
          </form>
        </div>
      </div>
    </div>
  </section>

    <!-- Banner Ends Here -->
    
   <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Dribbble</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright 2021 L'EQUIPE </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
  

  </body>
</html>

