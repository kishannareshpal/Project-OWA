<?php

  // include('../session.php'); // Includes session Script

  // if ($_COOKIE['lu'] === "owa") {
  //   header("location: ../../console/"); // Redirect To Profile Page
  // } else if ($_COOKIE['lu'] === "professor") {
  //   header("location: ../../console/professor/"); // Redirect To Profile Page
  // }

  // if(!isset($_COOKIE['lu'])){
  //   @header("location: ../../"); // Redirecting To Profile Page
  //   print_r("Usuário não autenticado. Por favor volte e autentique-se.");
  //   die();
  // }
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
    <link rel="stylesheet" href="../../required/css/semantic-ui-alerts.min.css">
    <noscript>OWA Aviso: Por favor abilite o uso do Javascript no seu navegador para poder usufruir da página <i>Meu Aluno</i> do site da One World Academy. Obrigado.</noscript>
    <!-- <style media="screen">
      * {
        font-family: 'Karma';
      }
    </style> -->
    <script src="//code.jquery.com/jquery-latest.min.js"></script>

    <script>
      var ided;

      function clearsenhastuff(){
        $('#_actualpass').val('');
        $('#_newpass').val('');
        $('#_newpassagain').val('');
      }

      function svme(){
        $('#passnotice').html('');
        document.getElementById('noticee').setAttribute("hidden", "");                            
        
        var actualpass     = $('#_actualpass').val();
        var newpass        = $('#_newpass').val();
        var newpassagain   = $('#_newpassagain').val();
        
        var prnome    = $('#_prnome').val();
        var ulnome    = $('#_ulnome').val();
        // var usrnome   = $('#_usrnamme').val();

        $.ajax({
  				url: "savemyinfo.php",
  				type: "POST",
          data: {
            id: ided,
            first_name: prnome,
            last_name: ulnome,
            actualpass: actualpass,
            newpass: newpass,
            newpassagain: newpassagain
          },
  				success: function(response){
            $("#"+ided).html('<i class="cog icon"></i>Definições');
            $('.blue.approve.button').html('<i class="save icon"></i>Guardar Mudanças');
            $('#sairbuttonnn').css({'pointer-events': ''});

            if (response === "INVALID") {
              document.getElementById('noticee').setAttribute("hidden", "");                            
              $('#passnotice').html('<span class="mdl-color-text--red-300">Oops, a senha actual digitada foi incorrecta.');
            
            } else if(response === "NOMATCH") {
              document.getElementById('noticee').setAttribute("hidden", "");                            
              $('#passnotice').html('<span class="mdl-color-text--red-300">Oops, as duas senhas novas digitadas não são iguais. Reescreva-os e tente novamente.');
              
            } else if(response === "CHANGED") {
              $('#passnotice').html('');
              $('#_actualpass').val('');              
              $('#_newpass').val('');
              $('#_newpassagain').val('');
              document.getElementById('noticee').removeAttribute("hidden", "");
              $('#noticee .list').html('<li span="color: green"><strong>Senha trocada com sucesso!</strong> Na proxima vez que se autenticares utilize a senha nova.</li>');
            
            } else if((response === "PROFILEERROR") || (response === "CHANGEDERROR")) {
              document.getElementById('noticee').setAttribute("hidden", "");                            
              $.suiAlert({
                title: 'ERROR!',
                description: 'Oops, ocorreu algum erro. Tente mais tarde ou contacte-nos.',
                type: 'error',
                time: '5',
                position: 'bottom-left'
              });
            
            } else if (response === "") {
              document.getElementById('noticee').setAttribute("hidden", "");
              $('#nommee').html("<strong>Nome: </strong>" + $('#_prnome').val() + " " + $('#_ulnome').val());
              
              $('#_actualpass').val('');       
              $('#_newpass').val('');
              $('#_newpassagain').val('');

              $.suiAlert({
                title: 'Sucesso!',
                description: 'Informação do(a) Aluno(a) guardada com sucesso.',
                type: 'success',
                time: '5',
                position: 'bottom-left'
              });
            }

  				}
  		  });
      }

      function plseditme(e){ // edit aluno's settings
        ided = e.id;
        
        $("#"+ided).html('<i class="cog icon"></i><span class="spinner"><div class="bounce1 mdl-color--white"></div><div class="bounce2 mdl-color--white"></div><div class="bounce3 mdl-color--white"></div></span>');
        $('#sairbuttonnn').css({'pointer-events': 'none'});

        $.ajax({
  				url: "loadmyinfo.php",
  				type: "GET",
          data: {
            id: ided
          },
          dataType: 'json',
  				success: function(response){
            if (response === "") {
              // oops. bad fuckery happened here
              alert('Error: 909'); // no user found i guess
              $("#"+ided).html('<i class="cog icon"></i>Definições');

            } else {
              $('#_prnome').val(response[0]['first_name']);
              $('#_ulnome').val(response[0]['last_name']);

              $("#"+ided).html('<i class="cog icon"></i>Definições');
              $('#sairbuttonnn').css({'pointer-events': ''});
              
              // Clear previous operations
              $('#passnotice').html('');
              $('#_actualpass').val('');              
              $('#_newpass').val('');
              $('#_newpassagain').val('');
              document.getElementById('noticee').setAttribute("hidden", "");

              $('#editmodal').modal({
                closable  : false,
                onApprove : function() {
                  $('.blue.approve.button').html('<i class="save icon"></i><span class="spinner"><div class="bounce1 mdl-color--white"></div><div class="bounce2 mdl-color--white"></div><div class="bounce3 mdl-color--white"></div></span>');
                  $('#sairbuttonnn').css({'pointer-events': 'none'});
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
              <h4 class="mdl-color-text--grey-800" id='nommee' style="margin-bottom: 0px"><strong>Nome: </strong><?php echo $ls__first_name." ".$ls__last_name ?></h4>
              <h4 class="mdl-color-text--grey-200;" style="margin-top: 5px"><strong>Classe: </strong><?php echo $ls__grade ?></h5>
              <a href="../logout.php" id='sairbuttonnn' style="margin-top: 10px;" class="ui labeled icon mdl-color-text--white mdl-color--red-300 button">
                <i class="log out icon"></i>
                Sair da conta
              </a>

              <a onclick="plseditme(this)" id="<?php echo $ls__id ?>" style="margin-top: 8px;" class="ui labeled icon mdl-color-text--white mdl-color--grey-700 button">
                <i class="cog icon"></i>
                Definições
              </a>
            </div>
        </div>
      </div>
      


      <div class="mdl-grid" style="margin-bottom: 350px;">
        <div style="margin-top: 30px; border-radius: 15px; padding: 20px; overflow-x: auto" class="mdl-cell <?php if ($ls__grade !== 'Pré-Escolar'){echo 'mdl-cell--4-col';} else {echo 'mdl-cell--12-col';} ?> mdl-cell--4-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--white hoverable">
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
        <?php if ($ls__grade !== "Pré-Escolar"): ?>
          <div style="margin-top: 30px; padding: 20px; border-radius: 15px; overflow-x: auto" class="mdl-cell mdl-cell--8-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-50">
          <h2 class="mdl-color-text--grey-400"><strong>Pauta</strong></h2>
          
          <div class="select">
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
                    type: "GET",
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
            <div class="la-ball-fall la-dark">
                <div></div>
                <div></div>
                <div></div>
            </div>
          </div>

        </div>
        <?php endif; ?>
        
        <div id="editmodal" class="ui tiny modal">
            <div class="header"><i class="cog blue icon"></i>&nbsp Definições</div>
            <div class="scrolling content">
              <!-- Operation Notices -->
              <div style='font-size: 12px' hidden id='noticee' class="ui green message">
                <ul class="list">
                  <!-- <li>SUCESSO: Password foi trocado com sucesso! Da próxima vez que se autenticares por favor utilize o novo password.</li> -->
                </ul>
              </div>

              <!-- Change aluno information -->
              <div style='width: 100%' class="ui styled accordion">
                <div class="title mdl-color--grey-50">
                  <i class="dropdown icon"></i>
                  Dados do Aluno
                </div>
                <div class="content">
                  <p>Primeiro Nome:
                    <span class="ui icon input fluid">
                      <input id="_prnome" type="text" autocomplete="name" placeholder="primeiro nome...">
                      <i class="edit icon"></i>
                    </span>
                  </p>

                  <p>Último Nome (Apelido):
                    <span class="ui icon input fluid">
                      <input id="_ulnome" type="text" autocomplete="name" placeholder="apelido...">
                      <i class="edit icon"></i>
                    </span>
                  </p>
                </div>
                
                <!-- Change password -->
                <div onclick='clearsenhastuff()' class="title mdl-color--grey-50">
                  <i class="dropdown icon"></i>
                  Trocar a Senha
                </div>
                <div class="content">
                  <p id='passnotice'></p>
                  <p>Senha Actual:
                    <span class="ui input fluid">
                      <input id="_actualpass" type="password" placeholder="senha actual...">
                    </span>
                  </p>

                  <p>Nova senha:
                    <span class="ui input fluid">
                      <input id="_newpass" type="password" autocomplete="password" placeholder="nova senha...">
                    </span>
                  </p>

                  <p>Confirmar Nova senha:
                    <span class="ui input fluid">
                      <input id="_newpassagain" type="password" autocomplete="password" placeholder="nova senha (mais uma vez)...">
                    </span>
                  </p>
                </div>
              </div> <!-- end of accordion -->

            </div> <!-- end of modal content -->

            <div class="actions">
              <div class="ui grey deny button">
                Fechar
              </div>
              <div class="ui labeled icon blue approve button">
                <i class="save icon"></i>Guardar Mudanças
              </div>
            </div> <!-- end of modal actions -->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.js"></script>
    <script src="../../required/js/material-components-web/dist/material-components-web.min.js"></script>
    <script src="../years.js"></script>
    <script src="../../required/js/app.js"></script>
    <script src="../../required/js/semantic-ui-alerts.min.js"></script>
    <script>
      $(document).ready(function(){

        $('.accordion').accordion({
          selector: {
            trigger: '.title'
          }
        });
      });
    </script>


  </body>
</html>
