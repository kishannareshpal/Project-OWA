<?php

  include('../session.php'); // Includes session Script

  if ($_COOKIE['lu'] === "owa") {
    header("location: ../../console/"); // Redirect To Profile Page
  } else if ($_COOKIE['lu'] === "professor") {
    header("location: ../../console/professor/"); // Redirect To Profile Page
  }

  if(!isset($_COOKIE['lu'])){
    @header("location: ../../"); // Redirecting To Profile Page
    print_r("Usuário não autenticado. Por favor volte e autentique-se.");
    die();
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- TODO: Add essential meta tags later -->
    <meta charset="UTF-8">
    <meta author="www.oneworldacademymz.com">
    <meta co-author="Kishan Nareshpal Jadav">
    <title>Meu Aluno - OWA</title>
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
    <!-- <style media="screen">
      * {
        font-family: 'Karma';
      }
    </style> -->
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
  </head>

<body class="mdl-color--yellow-100">

  <div id="loader_" class="middler">
    <img src="../../images/logo.png" width='60px'>
    <h4 style="font-family: 'karma'; margin: 0px">Meu Aluno / <span style="color: green"><?php echo $_COOKIE['lu'] ?></span> </h4>
    <p style="font-family: 'karma'; font-size: 11px; margin: 0px">Aguarde um momento</p>
    <span style="margin-top: 0px" class="spinner">
      <div class="bounce1 mdl-color--black"></div>
      <div class="bounce2 mdl-color--black"></div>
      <div class="bounce3 mdl-color--black"></div>
    </span>
  </div>

  <div id='main_' hidden class="mdl-layout mdl-js-layout mdl-layout--fixed-header"> <!-- rgba(72, 130, 251, 0.71) -->
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
      <div class="mdl-grid">
        <div style="border-radius: 15px; margin-top: 20px" class="mdl-cell mdl-cell--12-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--white hoverable">
            <div style="padding: 40px" class="">
              <h2 class="mdl-color-text--grey-400"><strong>Informação:</strong></h2>
              <h4 class="mdl-color-text--grey-800" style="margin-bottom: 0px"><strong>Nome: </strong><?php echo $ls__first_name." ".$ls__last_name ?></h4>
              <h4 class="mdl-color-text--grey-200;" style="margin-top: 5px"><strong>Classe: </strong><?php echo $ls__grade ?></h5>
              <a href="../logout.php" style="margin-top: 10px;" class="ui labeled icon mdl-color-text--white mdl-color--red-300 button">
                <i class="log out icon"></i>
                Sair da conta
              </a>
            </div>
        </div>
      </div>


      <div class="mdl-grid" style="margin-bottom: 350px;">
        <div style="margin-top: 30px; border-radius: 15px; padding: 20px; overflow-x: auto" class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--white hoverable">
          <h2 class="mdl-color-text--grey-400" style="margin-bottom: 0px"><strong>Mensalidade</strong></h2>
          <h4 class="mdl-color-text--grey-300" style="margin-top: 0px"><strong>Ano: <?php echo date('Y') ?></strong></h4>
          <table style="border-width: 0px" class="ui unstackable selectable compact table mdl-color--grey-200 hoverable">
            <thead>
              <tr class="mdl-color-text--grey-700">
                <th><span style="font-size: 12px">Mês</span></th>
                <th class="center aligned"><span style="font-size: 12px">Pago</span></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="collapsing">
                  Mês de Fevereiro
                </td>
                <?php if($ls__fev == 'Sim') : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Março
                </td>
                <?php if($ls__mar == 'Sim') : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr> <!-- class="disabled" -->
                <td class="collapsing">
                  Mês de Abril
                </td>
                <?php if($ls__abr == 'Sim') : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Maio
                </td>
                <?php if($ls__mai == 'Sim') : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Junho
                </td>
                <?php if($ls__jun == 'Sim') : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Julho
                </td>
                <?php if($ls__jul == 'Sim') : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>

              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Agosto
                </td>
                <?php if($ls__ago == 'Sim') : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Setembro
                </td>
                <?php if($ls__set == 'Sim') : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Outubro
                </td>
                <?php if($ls__out == 'Sim') : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Novembro
                </td>
                <?php if($ls__nov == 'Sim') : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>

              </tr>
            </tbody>
          </table>
        </div>



        <!--  opacity: .3; pointer-events: none -->
        <div style="margin-top: 30px; padding: 20px; border-radius: 15px; overflow-x: auto" class="mdl-cell mdl-cell--8-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-50 hoverable">
          <h2 class="mdl-color-text--grey-400"><strong>Pauta</strong></h2>

          <div class="select hoverable">
            <select onchange="spleasechange(this)" id="ano_st">
              <optgroup label="Pauta do Ano:">
                <?php while ($row_red_ = mysqli_fetch_assoc($red_sql_)) {?>
                  <option <?php if($row_red_['year']==date("Y")){echo "selected";} ?> value="<?php echo $row_red_['year'] ?>"><?php echo $row_red_['year']." - ".$row_red_['classe'] ?></option>
                <?php }; ?>

                <script type="text/javascript">
                  var sa = <?php echo date("Y") ?>;
                  $("#ktable").html("");

                  $.ajax({
                    url: "../notas_st.php",
                    type: "POST",
                    data: 'sa='+sa,
                    success: function(response){
                      $("#ktable").html(response);
                    }
                   });
                </script>
              </optgroup>
            </select>
          </div>



          <div style="margin-top: 20px" id="ktable">
            <div class="la-ball-fall la-light">
                <div></div>
                <div></div>
                <div></div>
            </div>
          </div>
          <h6 id="k-media" style="text-align: right; position: relative; right: 10px" class="mdl-color-text--grey-500"><strong>Méd. final da 1a Classe: <?php if(!empty($mediafinal)){echo $mediafinal;} else {echo "___";}; ?></strong></h6>




        </div>

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

          <!-- <ul class="mdl-mega-footer__link-list">
            <li><a href="#">About</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Partners</a></li>
            <li><a href="#">Updates</a></li>
          </ul> -->
        <div class="mdl-layout-spacer"></div>

          <!-- <div><script>document.write((new Date()).getFullYear())</script> © One World Academy Elementary School</div>
          <p>Maxixe, Mozambique</p>
          <div>All rights reserved.</div>
          <p class="mdl-color-text--red-400">Notice: This web app is under development. Build_nr. A<script>document.write(localStorage.getItem("app_version_owa"))</script></p>
          <div class="ui buttons">
            <button class="ui disabled button">Change to</button>
            <button class="ui icon button">
              Portuguese
            </button>
          </div> -->
        </div>
      </footer>
    </main>
  </div>

    <!-- Bootstrap JS -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="../../required/js/material-components-web/dist/material-components-web.min.js"></script>
    <script src="../years.js"></script>
    <script src="../../required/js/app.js"></script>


  </body>
</html>
