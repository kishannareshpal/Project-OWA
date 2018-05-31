<?php
  // If entered illegally
  // if(!isset($_POST['submit'])){
  //   header("location: ../"); // Redirect To Profile Page
  // }

  # code...
  include('../../../alunos/session.php'); // Includes session Script
  include('process.php'); // Includes session Script


  if ($_COOKIE['lu'] !== "owa") {
    @header("location: ../../../"); // Redirect To Profile Page
    print_r("Error 405");
    die();
  }
?>


<!DOCTYPE html>
<html lang="pt">
  <head>
    <!-- TODO: Add essential meta tags later -->
    <meta charset="UTF-8">
    <meta author="www.oneworldacademymz.com">
    <meta co-author="Kishan Nareshpal Jadav">
    <title>Add Aluno - OWA Console</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="One World Academy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="../../../images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Depprecated -->
    <!-- <meta name="apple-mobile-web-app-status-bar-style" content="black"> -->
    <meta name="apple-mobile-web-app-title" content="OWA">
    <link rel="apple-touch-icon-precomposed" href="../../../images/ios-desktop.png">

    <link rel="shortcut icon" href="../../../images/favicon.png">


    <!-- hosted css's -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="../../../required/css/trix.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css">
    <link rel="stylesheet" href="../../../required/js/material-components-web/dist/material-components-web.min.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-blue.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Open+Sans|Karma">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tabulator/3.4.4/css/tabulator.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../required/css/app.css">

    <script src="//code.jquery.com/jquery-latest.min.js"></script>

    <script type="text/javascript">
      function showmethis(){
        $('.ui.modal').modal('show');
      }

      function showmethat(){
        $('.ui.mini.modal').modal('show');
      }

      function disableme(e){
        e.setAttribute('disabled', '');
      }

      function enablethat(){
        document.getElementById('disbutton').removeAttribute('disabled');
      }
    </script>
  </head>

<body class="mdl-color--grey-50">

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"> <!-- rgba(72, 130, 251, 0.71) -->
    <header style="height: 150px;" class="mdl-color--grey-800 mdl-layout__header mdl-layout__header--scroll mdl-layout__header--transparent"> <!-- himage -->
      <!-- page header -->
      <div style="margin-top: 13px; padding-left: 10px" class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
        <!-- Title -->
        <span><img src="../../../images/logo.png" width='50px'></span>
        <a href="../../../" style="text-decoration: none; color: inherit" class="mdl-layout-title">
          <span style="font-family: 'Karma'; font-size: 18px; text-shadow: 1px 1px rgba(43, 43, 43, 0.8);">
            <strong>One World Academy</strong>
          </span>
          <h3 style="font-family: 'Karma'; font-size: 14px; margin-bottom: 0px; text-shadow: 1px 1px rgba(43, 43, 43, 0.8); margin-top: 0px" class="mdl-layout-title"><strong>Primary School</strong></h3>
          <h5 style="font-family: 'Karma'; font-size: 14px; margin-bottom: 0px; margin-top: 0px" class="mdl-layout-title mdl-color-text--grey-500"><strong>Maxixe, Mozambique</strong></h5>
        </a>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
      </div>
      <h2 style="text-align: center"><strong>Administração</strong></h2>
    </header>

    <main class="mdl-layout__content">
      <!-- page content -->
      <div class="mdl-grid" style="margin-bottom: 350px;">
        <div style="margin-top: 30px; border-radius: 15px; padding: 20px" class="mdl-cell mdl-cell--3-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-200">
          <h2 class="mdl-color-text--grey-800" style="margin-bottom: 0px"><strong>Meu Aluno</strong></h2>
          <div style="padding-top: 30px">

            <a href="../editaluno/" style="text-transform: none; width: 100%; text-align: left" class="ui basic button">
              <i class="ui edit outline black icon"></i>
              Alunos registados
            </a>

            <a href="#" style="text-transform: none; width: 100%; margin-top: 10px; text-align: left" class="ui blue button">
              <i class="ui user plus white icon"></i>
              Adicionar aluno(s)
            </a>
          </div>

          <div class="ui divider"></div>

          <div>
            <a href="../../pautas/" style="text-transform: none; width: 100%; text-align: left" class="ui basic button">
              <i class="ui file alternate black icon"></i>
              Pautas
            </a>

            <a href="../../mensalidades/" style="text-transform: none; width: 100%; margin-top: 10px; text-align: left" class="ui basic button">
              <i class="ui money bill black alternate outline icon"></i>
              Mensalidades
            </a>
          </div>

          <a href="../../logout.php" style="margin-top: 10px;" class="ui labeled icon mdl-color-text--white mdl-color--red-300 button">
            <i class="log out icon"></i>
            Sair da conta
          </a>

        </div>


        <!--  opacity: .3; pointer-events: none -->
        <!-- EDITAR NOTAS -->
        <div style="margin-top: 30px; padding: 20px; border-radius: 15px; overflow-x: auto" class="mdl-cell mdl-cell--9-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-300">
          <h2 class="mdl-color-text--grey-500" style="margin-bottom: 0px"><strong>Adicionar Aluno(s)</strong></h2>

          <form id='formiga' style="margin-top: 20px" enctype="multipart/form-data" method="POST">

            <div class="ui yellow message">
              <div style="margin-top: 20px; color: grey">• Classe inicial que vai frequentar:</div>
              <div class="select">
                <select name="slectclasse" id="slectclasse">
                    <option disabled>Classe</option>
                    <option selected value="Pre"> Pré-Escolar </option>
                    <option value="1a">           1a Classe   </option>
                    <option value="2a">           2a Classe   </option>
                    <option value="3a">           3a Classe   </option>
                    <option value="4a">           4a Classe   </option>
                </select>
              </div>

              <div style="margin-top: 20px; color: grey">
                • Selecione o ficheiro <i>.csv</i>
                (<span onclick="showmethis()" class="ui label mdl-color--yellow-50 mdl-shadow--2dp hoverable" style="cursor: pointer"><i class="eye icon"></i> Modelo</span>)
                <!-- (<span  class="mdl-color--grey-600 mdl-shadow--4dp mdl-color-text--white" style="padding: 5px; cursor: pointer; border-radius: 10px; font-size: 12px"><strong>modelo</strong></span>).-->
              </div>
              <div style="margin-top: 7px; margin-bottom: 20px;">
                <input onchange="enablethat()" type="file" name="file" accept=".csv">
              </div>
            </div>

            <div class="ui modal">
              <!-- <i class="close icon"></i> -->
              <div class="header">
                Modelo do <i>.csv</i>
              </div>

              <div class="image content">
                <div class="ui large image">
                  <img src="../../../images/modelo.png">
                </div>
              </div>
              <div style="padding: 20px" class="description">
                • Coluna (A): <b>Primeiro Nome.</b><br>
                • Coluna (B): <b>Apelido.</b><br>
                • Coluna (C): <b>Nome do usuário (username).</b><br>
                • Coluna (D): <b>Ano que começa a frequentar a classe acima selecionada.</b>
                <br><br>

                <div class="ui divider"></div>

                <a class="ui green basic button" style="margin: 5px" target="_blank" href="modelos/owa-template_addaluno.xlsx"><i class="ui file excel outline icon"></i> Baixar modelo (.xlsx)</a>
                <p style="margin: 0px">1- Edite o modelo utilizando <strong>MS Excel (Windows)</strong> ou <strong>LibreOffice Calc (Mac)</strong>.</p>
                <p style="margin: 0px">2- Edite apenas a Coluna <strong>(F)</strong> com o <i>nome do aluno</i> (as outras colunas serão preenchidas automaticamente).</p>
                <p style="margin: 0px">3- Apague a Coluna <strong>(F)</strong> do modelo antes de salvar o ficheiro.</p>
                <p style="margin: 0px">4- Salve o modelo com o formato CSV:</p>
                <p style="margin: 0px">&nbsp 4.1- <u>Para Excel (Windows)</u>: Salve o modelo com o formato <strong><i>Comma Delimited Values (.csv)</i></strong>.</p>
                <p style="margin-top: 0px">&nbsp 4.2- <u>Para LibreOffice Calc (Mac)</u>: Salve o modelo com o formato <strong><i>Text CSV (.csv)</i></strong>.</p>
              </div>
              <div class="actions">
                <div class="ui black deny button">
                  Fechar
                </div>
              </div>
            </div>

            <div style="margin-top: 20px;">
              <!-- <div id='disbutton' disabled onclick="showmethat()" class="ui blue button"><i class="ui icon add"></i> Adicionar</div> -->
              <button id='disbutton' disabled class="ui yellow button" name="addstudent" type="submit"><i class="ui icon add"></i> Adicionar</button>
              <br>
              <p style="margin: 0px; font-size: 12px; color: grey;"><strong>* Antes de submeter, favor verificar se a classe selecionada está correta</strong>.</p>
              <br>

              <?php if ($error !== null): ?>
                <div id="err" class="ui red mini message">
                  <!-- <i class="close icon"></i> -->
                    <div class="header">
                      Oops,
                    </div>
                    <p><?php echo $error; ?>
                  </p>
                </div>

                <script type="text/javascript">
                  setTimeout(function () {
                    document.getElementById('err').setAttribute('hidden', '');
                  }, 12000);
                </script>
              <?php endif; $error = null;?>

              <?php if (($success !== null) && ($error == null)): ?>
                <div id="suc" class="ui blue mini message">
                  <!-- <i class="close icon"></i> -->
                    <div class="header">
                      Sucesso!
                    </div>
                    <p>Novos aluno(s) adicionado(s) com sucesso.
                  </p>
                </div>

                <script type="text/javascript">
                  setTimeout(function () {
                    document.getElementById('suc').setAttribute('hidden', '');
                  }, 12000);
                </script>
              <?php endif; $success = null?>

            </div>


          </form>


        </div>
      </div>

      <footer id="footer" style="text-align: center; font-family: karma" class="mdl-mega-footer mdl-color--grey-100">
        <div class="mdl-mega-footer__middle-section">
        </div>

        <div class="mdl-mega-footer__bottom-section">
          <div class="mdl-layout-spacer"></div>

          <img src="../../../images/logo.png" width='32px' alt="">
          <p style="margin-bottom: 0px; cursor: none; font-size: 14px">1 Bairro Eduardo Mondlane</p>
          <p style="margin-top: 0px; margin-bottom: 0px; font-size: 14px">Maxixe, Moçambique</p>
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
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.js"></script>
    <script src="../../../required/js/material-components-web/dist/material-components-web.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tabulator/3.4.4/js/tabulator.min.js"></script>
    <script type="text/javascript" src="../../../required/js/trix.js"></script>
    <!-- <script src="add.js"></script> -->

  </body>
</html>
