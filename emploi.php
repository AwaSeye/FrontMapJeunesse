<?php
  include("fonctions.php");


  if(isset($_POST["submit"]) && isset($_FILES["cv"]["name"]) && isset($_FILES["coverLetter"]["name"]) )
  {
      $url = $api_url."/api/demandeEmploiStage"; // url de l'api à récuperer ....

      $cv = $_FILES["cv"]["name"];
      $coverLetter = $_FILES["coverLetter"]["name"];
      $tmp_cv = $_FILES["cv"]["tmp_name"];
      $tmp_coverLetter = $_FILES["coverLetter"]["tmp_name"];
      $job = $_POST["job"];
      $region = $_POST["region"];
      $domain = $_POST["domain"];

      $root = "assets/upload/";
      $upload1 = move_uploaded_file($tmp_cv , $root.$cv);
      $upload2 = move_uploaded_file($tmp_coverLetter , $root.$coverLetter);

      if($upload1 && $upload2	)
      {
          $execution = HandleEmploi($url , $cv , $coverLetter , $domain , $job  ,  $region);

          echo $execution ;
      }

  }

  

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="jquery.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">

  <!--FontAwesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Demande d'emploi</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Map -->
  <link href="Map.html" rel="import" />

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <!--
-->
</head>

<body style="background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);">

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
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <h2>Map Jeunesse <i class="fa fa-graduation-cap" aria-hidden="true"><em></em></i> </h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="services.php">Nos services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="forum.php">Forum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="connexion.php">LogIn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <br/><br/><br/><br/>  <br/><br/>
  <div class="container">
      <div class="row vh-100 align-items-center justify-content-center">
          <div class="col-sm-8 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
              <div class="row justify-content-center mb-4">
                 <img src="assets/images/JobSearch.jpg" class="w-50"/>              
            </div>
              <form method="post" action="emploi.php" enctype="multipart/form-data" >
                <div class="mb-4">
                  <label for="CV" class="form-label">Inserer votre CV</label>
                  <input type="file" class="form-control"  id="CV"  name="cv" />
                </div>
                <div class="mb-4">
                  <label for="Lettre" class="form-label">Inserer votre lettre de motivation</label>
                  <input type="file" class="form-control" id="Lettre" name="coverLetter" />
                </div>
                <div class="mb-4">
                  <label for="Profession" class="form-label">Votre domaine</label>
                  <input type="text" class="form-control" id="Profession" name="domain"  />
                </div>
                <div class="mb-4">
                  <label for="Profession" class="form-label">Profession</label>
                  <input type="text" class="form-control" id="Profession" name="job"  />
                </div>
                <div class="mb-4">
                  <label for="region" class="form-label">Region</label>
                  <select id="region" class="form-control" name="region"> 
                      <option value="Dakar"> Dakar </option>
                      <option value="Diourbel"> Diourbel </option>
                      <option value="Fatick"> Fatick </option>
                      <option value="Kaffrine"> Kaffrine </option>
                      <option value="Kaolack"> Kaolack </option>
                      <option value="Kédougou"> Kédougou </option>
                      <option value="Kolda"> Kolda </option>
                      <option value="Louga"> Louga </option>
                      <option value="Matam"> Matam </option>
                      <option value="Saint-Louis"> Saint-Louis </option>
                      <option value="Sédhiou"> Sédhiou </option>
                      <option value="Tambacounda"> Tambacounda </option>
                      <option value="Thiès"> Thiès </option>
                      <option value="Tambacounda"> Ziguinchor </option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-success w-100"> Envoyez </button>
              </form>
              <p class="mb-0 text-center"> Pas encore de compte ? <a class="text-decoration-none" href="inscription.html"> Inscrivez-vous Ici!</a></p>
          </div>

      </div>

  </div>

  <footer>
    <div class="container">
      <h2 style="color: aliceblue; margin-bottom: 30px;">Rejoignez-nous sur nos réseaux</h2>
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
            <p>Copyright 2021 L'EQUIPE

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

  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
      if (!cleared[t.id]) {                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value = '';         // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>

</body>

</html> 
