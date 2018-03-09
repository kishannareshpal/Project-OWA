<?php
  include('process.php'); // Includes Login Script


  if(isset($_SESSION['login_user'])){
    header("location: profile.php"); // Redirecting To Profile Page
  }
?>


<!DOCTYPE html>
<html lang="pt">
  <head>
    <!-- TODO: Add essential meta tags later -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - OWA</title>
    <!-- hosted css's -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css">
    <link rel="stylesheet" href="../required/js/material-components-web/dist/material-components-web.min.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-blue.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Open+Sans|Karma">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../required/css/app.css">

    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript">
    function animm(element){
      document.getElementById('spi').innerHTML = "...";
    }

    function dontanim(){
      document.getElementById('spi').innerHTML = "Entrar";
    }
    </script>
  </head>

<body class="mdl-color--grey-100">

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"> <!-- rgba(72, 130, 251, 0.71) -->
      <header style="height: 150px;" class="mdl-color--green-300 mdl-layout__header mdl-layout__header--scroll mdl-layout__header--transparent"> <!-- himage -->
        <!-- page header -->
        <div style="margin-top: 13px; padding-left: 10px" class="mdl-layout__header-row">
          <div class="mdl-layout-spacer"></div>
          <!-- Title -->
          <span><img src="../images/logo.png" width='50px' style="position: relative; bottom: 2px"></span>
          <a href="../" style="text-decoration: none; color: inherit" class="mdl-layout-title">
            <h3 style="font-family: 'Karma'; font-size: 16px; margin-bottom: 0px; text-shadow: 1px 1px rgba(43, 43, 43, 0.8); margin-top: 0px" class="mdl-layout-title"><strong>Escola Primária</strong></h3>
            <span style="font-family: 'Karma'; font-size: 20px; text-shadow: 1px 1px rgba(43, 43, 43, 0.8);">
              <strong>One World Academy</strong>
            </span>
            <h5 style="font-family: 'Karma'; font-size: 14px; margin-bottom: 0px; margin-top: 0px" class="mdl-layout-title mdl-color-text--green-700"><strong>Maxixe, Moçambique</strong></h5>
          </a>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
        </div>
        <h1 style="text-align: center"><strong>Meu Aluno</strong></h1>
      </header>

    <!-- page content -->
    <main class="mdl-layout__content">
      <!-- Main CARD Content -->

      <div class="mdl-grid" style="margin-bottom: 350px;">
        <div class="mdl-layout-spacer"></div>
        <div id="auth_tab" style="border-radius: 15px; margin-top: 40px" class="mdl-cell mdl-cell--6-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-200">
          <div style="padding-top: 30px; padding: 50px; padding-bottom: 40px" class="">
            <div class="mdl-grid" style="padding: 0px">
              <h2 class="mdl-color-text--grey-800"><strong>Autenticar</strong></h2>
              <div class="mdl-layout-spacer"></div>
            </div>
            <!-- <h2 style="position: relative; bottom: 55px; left: 76%; font-size: " class="mdl-color-text--grey-800"><strong>Registar</strong></h2> -->
            <form action="" method="post" class="ui form" style="width: 100%">
              <div class="required field">
                <label style="color: grey; margin-bottom: 1px; font-weight: 600;">Username</label>
                <input value="<?php echo $_POST["username"]; ?>" type="text" name="username" placeholder="nome do usuário">
              </div>
              <div class="required field">
                <label style="color: grey; margin-bottom: 1px; font-weight: 600;">Senha</label>
                <input type="password" name="password" placeholder="senha">
                <a href="?forgot" class="mdl-color-text--green-300" style="font-size: 12px; text-align: right"><u>Esqueceu-se da senha?</u></a>
                <br>
                <a href="../register/" class="mdl-color-text--grey-700" style="font-size: 12px; text-align: right"><u>Registe a sua conta.</u></a>
              </div>
              <hr style="margin-top: 0px">
              <div style="text-align: right">
                <button onunload="dontanim()" onclick='animm(this)' class="ui green button" name="submit" type="submit">
                  <span id="spa">Entrar</span>
                  <span id="spi" hidden class="spinner">
                    ...
                  </span>
                </button>
                <br>
                <span style='font-size: 10px; color: red'><?php echo $messages['login_message'] ?></span>
              </div>
            </form>
          </div>
        </div>
        <div class="mdl-layout-spacer"></div>
      </div>

      <footer style="text-align: center" class="mdl-mega-footer">
        <div class="mdl-mega-footer__middle-section">
        </div>

        <div class="mdl-mega-footer__bottom-section">
          <div class="mdl-layout-spacer"></div>
          <div><script>document.write((new Date()).getFullYear())</script> © One World Academy Elementary School</div>
          <p>Maxixe, Mozambique</p>
          <div>All rights reserved.</div>
          <p class="mdl-color-text--red-400">Notice: This web app is under development. Build_nr. A<script>document.write(localStorage.getItem("app_version_owa"))</script></p>

          <div class="mdl-layout-spacer"></div>
        </div>
      </footer>
    </main>
  </div>

    <!-- Bootstrap JS -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script defer src="../required/js/material-components-web/dist/material-components-web.min.js"></script>
    <!-- <script defer src="../required/js/app.js"></script> -->
    <script type="text/javascript">
      let goto_reg = document.getElementById('goto_reg')

      goto_reg.onclick = function() {
        window.location = "../register/";
      }
    </script>


  </body>
</html>
