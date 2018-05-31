<?php
  include('register.php'); // Includes Login Script


  if(isset($_COOKIE['lu'])){
    header("location: ../meualuno/"); // Redirecting To Profile Page
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108236694-2"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-108236694-2');
		</script>
    
    <!-- TODO: Add essential meta tags later -->
    <meta charset="UTF-8">
    <meta author="www.oneworldacademymz.com">
    <meta co-author="Kishan Nareshpal Jadav">
    <title>Register - OWA</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="One World Academy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="../../images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Depprecated -->
    <!-- <meta name="apple-mobile-web-app-status-bar-style" content="black"> -->
    <meta name="apple-mobile-web-app-title" content="OWA">
    <link rel="apple-touch-icon-precomposed" href="../../images/ios-desktop.png">

    <link rel="shortcut icon" href="../../images/favicon.png">
    <!-- hosted css's -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css">
    <link rel="stylesheet" href="../../required/js/material-components-web/dist/material-components-web.min.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-blue.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Open+Sans|Karma">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../required/css/app.css">
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
  </head>

<body class="mdl-color--yellow-100">

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"> <!-- rgba(72, 130, 251, 0.71) -->
      <header style="height: 150px; margin-top: 20px" class="mdl-layout__header mdl-layout__header--scroll mdl-layout__header--transparent"> <!-- himage -->
        <!-- page header -->
        <div style="margin-top: 13px; padding-left: 10px" class="mdl-layout__header-row">
          <div class="mdl-layout-spacer"></div>
          <!-- Title -->
          <span><img src="../../images/logo.png" width='50px'></span>
          <a href="../../" style="text-decoration: none; color: inherit" class="mdl-layout-title">
            <h3 style="font-family: 'Karma'; font-size: 16px; margin-bottom: 0px; text-shadow: 1px 1px rgba(236, 236, 236, 0.8); margin-top: 0px; color: green" class="mdl-layout-title"><strong>Escola Primária</strong></h3>
            <span style="font-family: 'Karma'; font-size: 20px; text-shadow: 1px 1px rgba(236, 236, 236, 0.8); color: green">
              <strong>One World Academy</strong>
            </span>
            <h5 style="font-family: 'Karma'; font-size: 14px; margin-bottom: 0px; margin-top: 0px" class="mdl-layout-title mdl-color-text--grey-700"><strong>Maxixe, Moçambique</strong></h5>
          </a>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
        </div>
        <h1 style="text-align: center; font-family: karma; color: black"><strong>- Meu Aluno -</strong></h1>
      </header>

    <main class="mdl-layout__content">
      <!-- page content -->

      <div class="mdl-grid" style="margin-bottom: 350px; overflow-y: auto">
        <div class="mdl-layout-spacer"></div>

        <div id="reg_tab" style="border-radius: 15px; margin-top: 40px; margin-bottom: 40px" class="mdl-cell mdl-cell--6-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--white mdl-shadow--2dp">
          <div style="padding-top: 30px; padding: 50px; padding-bottom: 40px" class="">
            <div class="mdl-grid" style="padding: 0px">
              <h2 class="mdl-color-text--grey-800"><strong>Registar</strong></h2>
              <div class="mdl-layout-spacer"></div>
            </div>
            <?php if ($error_reg !== null): ?>
              <div id="err" class="ui red mini message">
                <!-- <i class="close icon"></i> -->
                  <div class="header">
                    Oops,
                  </div>
                  <p><?php echo $error_reg; ?>
                </p>
              </div>
            <?php endif; $error_reg = null;?>

            <?php if (($success !== null) && ($error_reg == null)): ?>
              <div id="suc" class="ui blue mini message">
                <!-- <i class="close icon"></i> -->
                  <div class="header">
                    Operação Efectuada com sucesso.
                  </div>
                  <p>Aluno registado.</p>
                  <p>Redirecionando-lhe à página de <a href="https://wwww.oneworldacademymz.com/alunos/login">autenticação</a> em 5segundos.</p>
                </p>
              </div>

              <script type="text/javascript">
                setTimeout(function () {
                  window.location = "../login/";
                }, 5000);
              </script>
            <?php endif; $success = null?>
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
                <a href="../login/" class="mdl-color-text--green-300" style="font-size: 12px; text-align: right">Já estás registado? Clique aqui para autenticar</a>
              </div>
              <hr style="margin-top: 0px">
              <div style="text-align: right">
                <button class="ui blue button" name="submit_reg" type="submit">Registar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="mdl-layout-spacer"></div>
      </div>

      <footer id="footer" hidden style="text-align: center; font-family: karma" class="mdl-mega-footer mdl-color--grey-50">
        <div class="mdl-mega-footer__middle-section">
        </div>

        <div class="mdl-mega-footer__bottom-section">
          <div class="mdl-layout-spacer"></div>

          <img src="../../images/logo.png" width='32px' alt="">
          <p style="margin-bottom: 0px; cursor: none; font-size: 14px">1 Bairro Eduardo Mondlane</p>
          <p style="margin-top: 0px; margin-bottom: 0px; font-size: 14px">Maxixe, Mozambique</p>
          <!-- <p style="margin-top: 0px">Phone: </p> -->
          <p style="margin-top: 0px; margin-bottom: 0px; font-size: 14px">Phone: <a href="tel:+258843549804">+258 84-354-9804</a></p>
          <p style="margin-top: 0px; font-size: 14px">Email: <a target="_blank" href="mailto:oneworldacademymz@gmail.com">oneworldacademymz@gmail.com</a></a>
          <h6 style="font-size: 14px; font-family: karma"><strong>Copyright © <script>document.write((new Date()).getFullYear())</script> <span class="mdl-color-text--green-300">One World Academy Primary School</span></strong></h6>

        <div class="mdl-layout-spacer"></div>
        </div>
      </footer>
    </main>
  </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.js"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="../../required/js/material-components-web/dist/material-components-web.min.js"></script>
    <!-- <script defer src="../required/js/app.js"></script> -->
    <script src="../../required/js/app.js"></script>

  </body>
</html>
