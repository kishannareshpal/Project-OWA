<?php
  // If entered illegally
  // if(!isset($_POST['submit'])){
  //   header("location: ../"); // Redirect To Profile Page
  // }

  # code...
  include('../../../alunos/session.php'); // Includes session Script
  // include_once('notas/notas.php'); // Includes session Script
  // include('tabledata.php');

  if ($_COOKIE['lu'] !== "owa") {
    @header("location: ../../../"); // Redirect To Profile Page
    print_r("Error 405");
    die();
  };
?>


<!DOCTYPE html>
<html lang="pt">
  <head>
    <!-- TODO: Add essential meta tags later -->
    <meta charset="UTF-8">
    <meta author="www.oneworldacademymz.com">
    <meta co-author="Kishan Nareshpal Jadav">
    <title>Alunos - OWA Console</title>
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css">
    <link rel="stylesheet" href="../../../required/js/material-components-web/dist/material-components-web.min.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-blue.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Open+Sans|Karma">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tabulator/3.4.4/css/tabulator.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../required/css/app.css">
    <link rel="stylesheet" href="../../../required/css/semantic-ui-alerts.min.css">


    <style>
      .hoverable {
        -webkit-transition: -webkit-box-shadow .25s;
        transition: -webkit-box-shadow .25s;
        transition: box-shadow .25s;
        transition: box-shadow .25s, -webkit-box-shadow .25s;
      }

        .hoverable:hover {
          -webkit-box-shadow: 0 1px 1px 0 rgba(115, 196, 108, 0.35), 0 2px 4px 0 rgba(0, 0, 0, 0.19);
                  box-shadow: 0 1px 1px 0 rgba(115, 196, 108, 0.35) 0 2px 4px 0 rgba(0, 0, 0, 0.19);
        }

    </style>

    <script src="//code.jquery.com/jquery-latest.min.js"></script>

    <script type="text/javascript">
      var ided;

      function loadtable(e){
        var sc = e.value;
        $("#ktable").html('<div style="margin: 40px" class="la-ball-fall la-dark"><div></div><div></div><div></div></div>');

        $.ajax({
          url: "loadtable.php",
          type: "GET",
          data: 'sc='+sc,
          success: function(response){
            if (response === "") {
              $("#ktable").html("<div style='margin: 40px' class='mdl-color-text--red-200'>Nenhum aluno foi encontrado.</div>");
            } else {
              $("#ktable").html(response);
            }
          }
        });
      }


      function plsremove(e){
        ided=e.id;
        var cl = $('#classee').val();
        $('#__alunoname').html(e.parentElement.children[0].innerHTML);

        $('#removemodal').modal({
          closable  : false,
          onApprove : function() {
            $('#rmvmepls').html('<i class="minus square icon"></i><span class="spinner"><div class="bounce1 mdl-color--white"></div><div class="bounce2 mdl-color--white"></div><div class="bounce3 mdl-color--white"></div></span>');
            $("#"+ided).parent()[0].children[1].innerHTML='<span class="spinner"><div class="bounce1 mdl-color--red-300"></div><div class="bounce2 mdl-color--red-300"></div><div class="bounce3 mdl-color--red-300"></div></span>';
            $('#kktable').css({'pointer-events': 'none'});
            $.ajax({
      				url: "rmedit.php",
      				type: "POST",
              data: {
                id: ided,
                classe: cl
              },
      				success: function(response){
                $("#"+ided).parent()[0].children[1].innerHTML='<i class="trash alternate outline icon"></i>';
                $('#kktable').css({'pointer-events': ''});
                $.suiAlert({
                  title: 'Sucesso!',
                  description: 'Aluno(a) removido(a) com sucesso.',
                  type: 'success',
                  time: '5',
                  position: 'bottom-left',
                });
                loadtable(document.getElementById('classee'));

      				}
      		  });
          }
        }).modal('show');

      }

      function svme(){
        var istoreset = false;
        var prnome    = $('#_prnome').val();
        var ulnome    = $('#_ulnome').val();
        var usrnome   = $('#_usrnamme').val();

        if ($('#rstCheck').length === 1) {
          istoreset = document.getElementById('rstCheck').checked;
        }

        $.ajax({
  				url: "svedit.php",
  				type: "POST",
          data: {
            id: ided,
            first_name: prnome,
            last_name: ulnome,
            username: usrnome,
            isToReset: istoreset
          },
  				success: function(response){
            $("#"+ided).parent()[0].children[2].innerHTML='<i class="pencil alternate yellow icon"></i>';
            $('.green.approve.button').html('<i class="save icon"></i>Guardar');
            $('#kktable').css({'pointer-events': ''});
            $.suiAlert({
              title: 'Sucesso!',
              description: 'Informação do(a) Aluno(a) editado com sucesso.',
              type: 'success',
              time: '5',
              position: 'bottom-left',
            });
  				}
  		  });
      }

      function plseditme(e){
        ided = e.id;
        $("#"+ided).parent()[0].children[2].innerHTML='<span class="spinner"><div class="bounce1 mdl-color--black"></div><div class="bounce2 mdl-color--black"></div><div class="bounce3 mdl-color--black"></div></span>';
        $('#kktable').css({'pointer-events': 'none'});

        $.ajax({
  				url: "loadeditable.php",
  				type: "GET",
          data: {
            id: ided
          },
          dataType: 'json',
  				success: function(response){
            if (response === "") {
              // oops. bad fuckery happened here
              alert('Error: 809');
              $("#"+ided).parent()[0].children[2].innerHTML='<i class="pencil alternate yellow icon"></i>';

            } else {
              $('#_prnome').val(response[0]['first_name']);
              $('#_ulnome').val(response[0]['last_name']);
              $('#_usrnamme').val(response[0]['username']);
              if (response[0]['password'] !== "no") {
                $('#_cnfg').html(
                  '<span id="iscnfg" class="mdl-color-text--green"><strong>Configurado</strong></span>'+
                  ' | '+
                  '<span class="ui checkbox"><input type="checkbox" id="rstCheck"><label>Resetar a senha</label></span>'
                );
              } else {
                $('#_cnfg').html('<span id="iscnfg" class="mdl-color-text--red"><strong>Não Configurado</strong></span>');
              }

              $("#"+ided).parent()[0].children[2].innerHTML='<i class="pencil alternate yellow icon"></i>';
              $('#kktable').css({'pointer-events': ''});
              $('#editmodal').modal({
                closable  : false,
                onApprove : function() {
                  $("#"+ided).parent()[0].children[2].innerHTML='<span class="spinner"><div class="bounce1 mdl-color--black"></div><div class="bounce2 mdl-color--black"></div><div class="bounce3 mdl-color--black"></div></span>';
                  $('.green.approve.button').html('<i class="save icon"></i><span class="spinner"><div class="bounce1 mdl-color--white"></div><div class="bounce2 mdl-color--white"></div><div class="bounce3 mdl-color--white"></div></span>');
                  $('#kktable').css({'pointer-events': 'none'});
                  svme();
                  return false;
                }
              }).modal('show');
            }
  				}
  		  });
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
        <div style="margin-top: 30px; border-radius: 15px; padding: 20px" class="mdl-cell mdl-cell--3-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-200">
          <h2 class="mdl-color-text--grey-800" style="margin-bottom: 0px"><strong>Administração</strong></h2>
          <div style="padding-top: 30px">

            <a href="#" style="text-transform: none; width: 100%; text-align: left" class="ui blue button">
              <i class="ui edit outline white icon"></i>
              Alunos registados
            </a>

            <a href="../addaluno/" style="text-transform: none; width: 100%; margin-top: 10px; text-align: left" class="ui basic button">
              <i class="ui add user black icon"></i>
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

          <a href="../../logout.php" style="margin-top: 10px;" class="ui labeled icon red button">
            <i class="log out icon"></i>
            Sair da conta
          </a>
        </div>





        <!--  opacity: .3; pointer-events: none -->
        <!-- EDITAR NOTAS -->
        <div style="margin-top: 30px; padding: 20px; border-radius: 15px; overflow-x: auto" class="mdl-cell mdl-cell--9-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-300">
          <h2 class="mdl-color-text--grey-500" style="margin-bottom: 0px"><strong>Alunos Registados</strong></h2>

          <div class="select hoverable">
            <select id="classee" onchange="loadtable(this)">
                <option selected disabled>Classe    </option>
                <option value="1a">       1a Classe </option>
                <option value="2a">       2a Classe </option>
                <option value="3a">       3a Classe </option>
                <option value="4a">       4a Classe </option>
            </select>
          </div>

          <span data-inverted='' data-tooltip='Atualizar a tabela' data-position='right center' style="position: relative; top: 5px; left: 10px">
            <i onclick="loadtable(document.getElementById('classee'))" style="cursor: pointer" class="refresh blue icon"></i>
          </span>

          <table id="kktable" class="ui celled selectable unstackable structured table">
            <thead>
              <tr>
                <th class="center aligned twelve wide" rowspan="2">Nome</th>
                <th class="center aligned four wide" colspan="2">Operação</th>
              </tr>
              <tr>
                <th class="center aligned">Remover</th>
                <th class="center aligned">Editar</th>
              </tr>
            </thead>

            <tbody id="ktable" class="mdl-color-text--black">

            </tbody>
          </table>


          <div id='removemodal' class="ui mini modal">
            <!-- <i class="close icon"></i> -->
            <div class="header">
              <i class="trash alternate outline red icon"></i>&nbsp Confirmar
            </div>
            <div class="content">
              <div class="description">
                Tem a certeza que deseja remover o(a) aluno(a) <span class="mdl-color-text--green-500" id='__alunoname'></span>?
              </div>
            </div>
            <div class="actions">
              <div id='rmvmepls' class="ui labeled icon red approve button">
                <i class="minus square icon"></i>
                Sim, remover
              </div>
              <div class="ui grey deny button">
                Fechar
              </div>
            </div>
          </div>

          <div id="editmodal" class="ui fullscreen modal">
            <div class="header"><i class="pencil alternate yellow icon"></i>&nbsp Editar</div>
            <div class="content">
              <h4 class="ui dividing header">• Identificação</h4>
              <p>Primeiro Nome:
                <span class="ui input fluid">
                  <input id="_prnome" type="text" autocomplete="name" placeholder="primeiro nome...">
                </span>
              </p>
              <p>Último Nome (Apelido):
                <span class="ui input fluid">
                  <input id="_ulnome" type="text" autocomplete="name" placeholder="apelido...">
                </span>
              </p>

              <h4 class="ui dividing header">• Cadastro</h4>
              <p>Nome do usuário (Username):
                <span class="ui input fluid">
                  <input id="_usrnamme" type="text" autocomplete="username" placeholder="username...">
                </span>
              </p>

              <p style="margin-bottom:0">Senha (Password):</p>
              <div style="margin-top:0">
                <div class="ui compact mdl-color--white message">
                  <span id='_cnfg'>
                  </span>
                </div>

              </div>

            </div>
            <div class="actions">
              <div class="ui grey deny button">
                Fechar
              </div>
              <div class="ui labeled icon green approve button">
                <i class="save icon"></i>Guardar
              </div>
            </div>
          </div>

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
    <script src="../../../required/js/semantic-ui-alerts.min.js"></script>
    <!-- <script src="../js/app.js"></script> -->


  </body>
</html>
