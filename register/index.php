<?php
  include('register.php'); // Includes Login Script


  if(isset($_SESSION['login_user'])){
    header("location: profile.php"); // Redirecting To Profile Page
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- TODO: Add essential meta tags later -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - OWA</title>
    <!-- hosted css's -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css">
    <link rel="stylesheet" href="../required/js/material-components-web/dist/material-components-web.min.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-blue.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Open+Sans|Karma">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../required/css/app.css">

    <script src="//code.jquery.com/jquery-latest.min.js"></script>
  </head>

<body class="mdl-color--grey-100">

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"> <!-- rgba(72, 130, 251, 0.71) -->
      <header style="height: 150px;" class="mdl-color--green-300 mdl-layout__header mdl-layout__header--scroll mdl-layout__header--transparent"> <!-- himage -->
        <!-- page header -->
        <div style="margin-top: 13px; padding-left: 10px" class="mdl-layout__header-row">
          <div class="mdl-layout-spacer"></div>
          <!-- Title -->
          <span><img src="../images/logo.png" width='50px'></span>
          <a href="../" style="text-decoration: none; color: inherit" class="mdl-layout-title">
            <h3 style="font-family: 'Karma'; font-size: 16px; margin-bottom: 0px; text-shadow: 1px 1px rgba(43, 43, 43, 0.8); margin-top: 0px" class="mdl-layout-title"><strong>Escola Primária</strong></h3>
            <span style="font-family: 'Karma'; font-size: 20px; text-shadow: 1px 1px rgba(43, 43, 43, 0.8);">
              <strong>One World Academy</strong>
            </span>
          </a>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
        </div>
        <h1 style="text-align: center"><strong>Meu Aluno</strong></h1>
      </header>

    <main class="mdl-layout__content">
      <!-- page content -->

      <div class="mdl-grid" style="margin-bottom: 30px">
        <div class="mdl-layout-spacer"></div>

        <div id="reg_tab" style="border-radius: 15px; margin-top: 40px" class="mdl-cell mdl-cell--6-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-200">
          <div style="padding-top: 30px; padding: 50px; padding-bottom: 40px" class="">
            <div class="mdl-grid" style="padding: 0px">
              <h2 class="mdl-color-text--grey-800"><strong>Registar</strong></h2>
              <div class="mdl-layout-spacer"></div>
            </div>
            <form action="" method="post" class="ui form" style="width: 100%">
              <div class="required field">
                <label style="color: grey; margin-bottom: 1px; font-weight: 600;">Username</label>
                <input value="<?php echo $_POST["regusername"]; ?>" type="text" name="regusername" placeholder="nome do usuário">
              </div>
              <div class="required field">
                <label style="color: grey; margin-bottom: 1px; font-weight: 600;">Senha</label>
                <input type="password" name="regpassword" placeholder="senha">
              </div>
              <div class="required field">
                <label style="color: grey; margin-bottom: 1px; font-weight: 600;">Confirmar Senha</label>
                <input type="password" name="regpassword_confirm" placeholder="senha novamente">
                <a href="../parents/login.php" class="mdl-color-text--green-300" style="font-size: 12px; text-align: right">Já estás registado? Clique aqui para autenticar</a>
              </div>
              <hr style="margin-top: 0px">
              <div style="text-align: right">
                <span style='font-size: 10px; color: red'><?php echo $error_reg ?></span>
                <button class="ui blue button" name="submit_reg" type="submit">Registar</button>
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
      let goto_auth = document.getElementById('goto_auth')
      goto_auth.onclick = function() {
        window.location = "../parents/login.php";
      };
    </script>


  </body>
</html>
