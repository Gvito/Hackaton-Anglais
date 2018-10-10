<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Index</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <!-- font-->
  <link rel="stylesheet" href="../font/css/font-awesome.min.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <main>
    <!-- center form and logo -->
    <div class="centre">
      <!-- logo -->
      <div class="logo">
        <img src="https://www.adep-roubaix.fr/img/adep-logo-cut.png" alt="Logo du site">
      </div>
      <!-- end logo -->
      
      <!-- title page -->
      <h1>Espace connexion utilisateur</h1>
      <!-- end title page -->

      <!-- form -->
      <div class="connexion">
        <form method="post" action="/index.php">
          <label>Votre nom:</label>
          <input type="text" name="nom">
          <label>Votre prénom:</label> 
          <input type="text" name="prenom">
          <label>Votre clé:</label>
          <input type="text" name="cle">
          <input class="valider" type="submit" value="Se connecter">
        </form> 
        <!-- end form -->
      </div>
    </div>
    <!-- end center form and logo -->
  </main>
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
