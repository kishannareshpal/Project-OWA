<?php
  // If entered illegally
  // if(!isset($_POST['submit'])){
  //   header("location: ../"); // Redirect To Profile Page
  // }

  # code...
  include('../../../parents/session.php'); // Includes session Script
  include('process.php'); // Includes session Script

  // include_once('notas/notas.php'); // Includes session Script
  // include('tabledata.php');

  if ($_SESSION['login_user'] !== "oneworldacademy") {
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Console - OWA</title>
    <!-- hosted css's -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
          <h3 style="font-family: 'Karma'; font-size: 16px; margin-bottom: 0px; text-shadow: 1px 1px rgba(43, 43, 43, 0.8); margin-top: 0px" class="mdl-layout-title"><strong>Escola Primária</strong></h3>
          <span style="font-family: 'Karma'; font-size: 20px; text-shadow: 1px 1px rgba(43, 43, 43, 0.8);">
            <strong>One World Academy</strong>
          </span>
        </a>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
      </div>
      <h1 style="text-align: center"><strong>Console</strong></h1>
    </header>

    <main class="mdl-layout__content">
      <!-- page content -->

      <div class="mdl-grid" style="margin-bottom: 350px;">
        <div style="margin-top: 30px; border-radius: 15px; padding: 20px" class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-200 mdl-shadow--4dp">
          <h2 class="mdl-color-text--grey-800" style="margin-bottom: 0px"><strong>Administração</strong></h2>
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
            <a href="../../pautas" style="text-transform: none; width: 100%; text-align: left" class="ui basic button">
              <i class="ui file alternate black icon"></i>
              Pautas
            </a>

            <a href="../../mensalidades/" style="text-transform: none; width: 100%; margin-top: 10px; text-align: left" class="ui basic button">
              <i class="ui money bill black alternate outline icon"></i>
              Mensalidades
            </a>
          </div>

          <a href="../../logout.php" style="margin-top: 10px;" class="ui labeled icon red button">
            <i class="log out icon"></i>
            Log Out
          </a>

        </div>


        <!--  opacity: .3; pointer-events: none -->
        <!-- EDITAR NOTAS -->
        <div style="margin-top: 30px; padding: 20px; border-radius: 15px; overflow-x: auto" class="mdl-cell mdl-cell--8-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-300 mdl-shadow--4dp">
          <h2 class="mdl-color-text--grey-500" style="margin-bottom: 0px"><strong>Adicionar Aluno(s)</strong></h2>
          <form id='formiga' class="" enctype="multipart/form-data" method="POST">

            <div class="ui yellow message">
              <div style="margin-top: 20px; color: grey">• Classe inicial que vai frequentar:</div>
              <div class="select">
                <select name="slectclasse" id="slectclasse">
                    <option disabled>Classe</option>
                    <option selected value="1a">  1a Classe </option>
                    <option value="2a">           2a Classe </option>
                    <option value="3a">           3a Classe </option>
                    <option value="4a">           4a Classe </option>
                </select>
              </div>

              <div style="margin-top: 20px; color: grey">• Selecione o ficheiro <i>.csv</i> (<span onclick="showmethis()" class="mdl-color--grey-600 mdl-shadow--4dp mdl-color-text--white" style="padding: 5px; cursor: pointer; border-radius: 10px; font-size: 12px"><strong>modelo</strong></span>).</div>
              <div style="margin-bottom: 20px;">
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
                <br><br>
                <div class="description">
                  - 1ª coluna: <b>Primeiro Nome.</b><br>
                  - 2ª coluna: <b>Apelido.</b><br>
                  - 3ª coluna: <b>Nome do usuário.</b><br>
                  - 4ª coluna: <b>Ano que começa a frequentar a 1ª classe.</b>
                </div>
              </div>
              <div class="actions">
                <div class="ui black deny button">
                  Okay
                </div>
              </div>
            </div>

            <div style="margin-top: 20px;">
              <!-- <div id='disbutton' disabled onclick="showmethat()" class="ui blue button"><i class="ui icon add"></i> Adicionar</div> -->
              <button id='disbutton' disabled class="ui blue button" name="addstudent" type="submit"><i class="ui icon add"></i> Adicionar</button>

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

      <footer style="text-align: center;" class="mdl-mega-footer">
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
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.js"></script>
    <script src="../../../required/js/material-components-web/dist/material-components-web.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tabulator/3.4.4/js/tabulator.min.js"></script>
    <!-- <script src="../js/app.js"></script> -->


  </body>
</html>
