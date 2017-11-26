<html>
<head>
  <link rel="shortcut icon" href="https://scratchtools.tk/isonline/isonline-logo.png" type="image/x-icon">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>isOnline News</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">isOnline</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/">Home</a></li>
        <li><a href="/news">News</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="/">Home</a></li>
        <li><a href="/news">News</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
<?php
echo file_get_contents("newsdata");
?>



    </div>
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">isOnline</h5>
            <p class="grey-text text-lighten-4">isOnline is a browser extension that tells you if your friends on <a class="orange-text text-lighten-3" href='https://scratch.mit.edu'>Scratch</a> are online or offline</p>


          </div>
          <div class="col l3 s12">
            <h5 class="white-text">The Team</h5>
            <ul>
              <li><a class="white-text" href="https://scratch.mit.edu/users/Herohamp">Herohamp</a></li>
              <li><a class="white-text" href="https://scratch.mit.edu/users/DatOneLefty">DatOneLefty</a></li>
              <li><a class="white-text" href="https://scratch.mit.edu/users/PackersRuleGoPack">PackersRuleGoPack</a></li>
              <li><a class="white-text" href="https://scratch.mit.edu/users/World_Languages">World_Languages</a></li>
            </ul>
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="white-text" href="http://ison.ga">Install isOnline</a></li>
              <li><a class="white-text" href="https://scratchtools.tk">ScratchTools</a></li>
              <li><a class="white-text" href="https://scratch.mit.edu/users/isonlinev2">Support</a></li>
              <li><a class="white-text" href="https://scratch.mit.edu/discuss/topic/253147">Feedback</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        Theme by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>, site by <a class="orange-text text-lighten-3" href="https://scratch.mit.edu/users/DatOneLefty">DatOneLefty</a>. View this project on <a class="orange-text text-lighten-3" href="https://github.com/DatOneLefty/isonline.cf">GitHub</a>
        </div>
      </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-92839678-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-92839678-3');
    </script>

    </body>
  </html>
