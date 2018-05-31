<?php

  # code...
  include('../../../alunos/session.php'); // Includes session Script

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
    <title>Pautas - OWA Console</title>
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
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tabulator/3.4.4/css/tabulator.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../../../required/css/app.css">

    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile"></script>

    <script>
  		function showEdit(editableObj) {
  			$(editableObj).css("background","#dddddd");
  		}

  		function saveToDatabase(editableObj, column, id) {
        var sa = document.getElementById('anoo').value;
        var sc = document.getElementById('classee').value;
        var innedit;


        if (editableObj.innerHTML.match(/\bnull|NULL|Null|-|Nul|nul|Nulll|nulll|NUll|NULl\b/g)) {
          innedit = "NULL";
        } else {
          innedit = editableObj.innerHTML.replace(/\D/g, '');
        }

        $.ajax({
  				url: "saveedit.php",
  				type: "POST",
  				data:'col='+column + '&val='+innedit + '&id='+id + '&sa='+sa + '&sc='+sc,
  				success: function(data){
            // console.log(data);
            if (data === "done") {
              $(editableObj).removeClass('positive negative');
              $(editableObj).animate({backgroundColor: '#defcb3'});
              setTimeout(function () {
                $(editableObj).animate({backgroundColor: '#ffffff'});
              }, 1000);

              if (innedit >= 10) {
                $(editableObj).animate({color: '#19a65e'});
              } else if (innedit>=0 && innedit<10) {
                $(editableObj).animate({color: '#ff5b50'});
              } else {
                $(editableObj).animate({color: '#000000'});
              }

              if (innedit !== "NULL") {
                editableObj.innerHTML=innedit;
              }

              editableObj.setAttribute('contenteditable', 'false');

            } else { //if (data === "error")
              $(editableObj).removeClass('positive negative');
              $(editableObj).animate({backgroundColor: '#fcb3b3'});
              setTimeout(function () {
                $(editableObj).animate({backgroundColor: '#ffffff'});
              }, 1500);

              editableObj.setAttribute('contenteditable', 'false');
            }
  				}
  		   });
  		}

      function plsedit(t){
        $(t).keyup(function(){
          if ((t.parentElement.children[1].innerHTML !== (null||""||NaN)) || (t.parentElement.children[2].innerHTML !== (null||""||NaN)) || (t.parentElement.children[3].innerHTML !== (null||""||NaN))){
            var notafinal = (parseInt(t.parentElement.children[1].innerHTML) + parseInt(t.parentElement.children[2].innerHTML) + parseInt(t.parentElement.children[3].innerHTML))/3;
            $(t.parentElement.children[4]).text(Math.ceil(notafinal));
          }
        });

        t.setAttribute('contenteditable', 'true');
        showEdit(t);
      }

      function loadtable(e){
        var sa = document.getElementById('anoo').value;
        var sc = e.value;
        $("#ktable").html('<div style="margin: 40px" class="la-ball-fall la-dark"><div></div><div></div><div></div></div>');

        $.ajax({
  				url: "loadtable.php",
  				type: "POST",
          data: 'sa='+sa+'&sc='+sc,
  				success: function(response){
            if (response === "") {
              $("#ktable").html("<div style='margin: 40px' class='mdl-color-text--red-200'>Nenhum aluno foi encontrado.</div>");
            } else {
              $("#ktable").html(response);
            }
  				}
  		   });
      }

      $(function(){

      });
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
        <a href="../../../../" style="text-decoration: none; color: inherit" class="mdl-layout-title">
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
        <div style="margin-top: 30px; border-radius: 15px; padding: 20px" class="mdl-cell mdl-cell--3-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-200 ">
          <h2 class="mdl-color-text--grey-800" style="margin-bottom: 0px"><strong>Professor</strong></h2>

          <div>
            <a href="../" style="text-transform: none; width: 100%; text-align: left" class="ui mdl-color--blue-200 mdl-color-text--white button">
              <i class="ui file alternate white icon"></i>
              Pautas
            </a>

            <span>
              <button style="cursor: default; margin-right: 0px; width: 10%; float: left; text-transform: none; margin-top: 10px; text-align: left" class="ui mdl-color--grey-200 button">
                <i class="ui long arrow alternate right black icon"></i>
              </button>

              <a href="#" style="margin-right: 0px; width: 80%; float: right; text-transform: none; margin-top: 10px; text-align: left" class="ui blue button">
                <i class="ui file alternate outline white icon"></i>
                Resultados
              </a>
            </span>
          </div>

          <a href="../../logout.php" style="margin-top: 60px;" class="ui labeled icon red button">
            <i class="log out icon"></i>
            Sair da conta
          </a>
        </div>
        <!--  opacity: .3; pointer-events: none -->
        <!-- EDITAR NOTAS -->
        <div style="margin-top: 30px; padding: 20px; border-radius: 15px; overflow-x: auto" class="mdl-cell mdl-cell--9-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-300">
          <h2 class="mdl-color-text--grey-500" style="margin-bottom: 0px"><strong>Resultados</strong></h2>

          <div class="select hoverable">
            <select id="anoo">
                <option selected disabled>Ano</option>
                <?php for ($i=2017; $i < date('Y'); $i++) { ?>
                  <option <?php if($i+1 == date('Y')){?>selected<?php };?> value="<?php echo $i+1 ?>"><?php echo $i+1 ?></option>
                <?php }; ?>
            </select>

            <!-- <script type="text/javascript">
              loadtable(document.getElementById('anoo'));
            </script> -->
          </div>

          <div class="select hoverable">
            <select onchange="loadtable(this)" id="classee">
                <option selected disabled>Classe    </option>
                <option value="1a">       1a Classe </option>
                <option value="2a">       2a Classe </option>
                <option value="3a">       3a Classe </option>
                <option value="4a">       4a Classe </option>
            </select>
          </div>


          <table style="overflow-x: scroll" class="ui celled selectable unstackable structured table">
            <thead>
              <tr>
                <th class="center aligned eight wide" rowspan="2">Nome</th>
                <th class="center aligned two wide" colspan="2">Nota</th>
                <th class="center aligned two wide" rowspan="2">Média<br>Final</th>
              </tr>
              <tr>
                <th class="center aligned">Final</th>
                <th class="center aligned">Exame</th>
              </tr>
            </thead>

            <tbody id="ktable" class="mdl-color-text--black">

            </tbody>
          </table>

        </div>

      </div>
      <!-- 2326 build -->
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
    <!-- <script type="text/javascript" src="../js/app.js"></script> -->
  </body>
</html>
