<?php
  // If entered illegally
  // if(!isset($_POST['submit'])){
  //   header("location: ../"); // Redirect To Profile Page
  // }

  # code...
  include('../../parents/session.php'); // Includes session Script

  if ($_SESSION['login_user'] !== "oneworldacademy") {
    @header("location: ../"); // Redirect To Profile Page
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
    <link rel="stylesheet" href="../../required/js/material-components-web/dist/material-components-web.min.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-blue.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Open+Sans|Karma">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tabulator/3.4.4/css/tabulator.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../../required/css/app.css">

    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile"></script>

    <script>
  		function showEdit(editableObj) {
  			$(editableObj).css("background","#dddddd");
  		}

  		function saveToDatabase(editableObj, column, id) {
        var sd = document.getElementById('disciplinaa').value;
        var sc = document.getElementById('classee').value;
        var innedit;


        if (editableObj.innerHTML.match(/\bnull|NULL|Null|-|Nul|nul|Nulll|nulll|NUll|NULl\b/g)) {
          innedit = "NULL";
        } else {
          innedit = editableObj.innerHTML.replace(/\D/g, '');
        }

        $.ajax({
  				url: "pautas/saveedit.php",
  				type: "POST",
  				data:'col='+column + '&val='+innedit + '&id='+id + '&sd='+sd + '&sc='+sc,
  				success: function(data){
            // console.log(data);
            if (data === "done") {
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
        t.setAttribute('contenteditable', 'true');
        showEdit(t)
      }

      function loadtable(e){
        var sd = e.value;
        var sc = document.getElementById('classee').value;
        $("#ktable").html('<div style="margin: 40px" class="la-ball-fall la-dark"><div></div><div></div><div></div></div>');

        $.ajax({
  				url: "pautas/addnotas.php",
  				type: "POST",
          data: 'sd='+sd+'&sc='+sc,
  				success: function(response){
            if (response === "") {
              $("#ktable").html("<div style='margin: 40px' class='mdl-color-text--red-200'>Nenhum aluno foi encontrado.</div>");
            } else {
              $("#ktable").html(response);
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
        <span><img src="../../images/logo.png" width='50px'></span>
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

      <div class="mdl-grid" style="margin-bottom: 220px;">
        <div style="margin-top: 30px; border-radius: 15px; padding: 20px" class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-200 mdl-shadow--4dp">
          <h2 class="mdl-color-text--grey-800" style="margin-bottom: 0px"><strong>Administração</strong></h2>
          <div style="padding-top: 30px">

            <a href="../alunos/editaluno" style="text-transform: none; width: 100%; text-align: left" class="ui basic button">
              <i class="ui edit outline black icon"></i>
              Alunos registados
            </a>

            <a href="../alunos/addaluno" style="text-transform: none; width: 100%; margin-top: 10px; text-align: left" class="ui basic button">
              <i class="ui add user black icon"></i>
              Adicionar aluno(s)
            </a>
          </div>

          <div class="ui divider"></div>

          <div>
            <a href="#" style="text-transform: none; width: 100%; text-align: left" class="ui blue button">
              <i class="ui file alternate white icon"></i>
              Pautas
            </a>

            <a href="mensalidades" style="text-transform: none; width: 100%; margin-top: 10px; text-align: left" class="ui basic button">
              <i class="ui money bill black alternate outline icon"></i>
              Mensalidades
            </a>
          </div>

          <a href="../logout.php" style="margin-top: 10px;" class="ui labeled icon red button">
            <i class="log out icon"></i>
            Log Out
          </a>
        </div>
        <!--  opacity: .3; pointer-events: none -->
        <!-- EDITAR NOTAS -->
        <div style="margin-top: 30px; padding: 20px; border-radius: 15px; overflow-x: auto" class="mdl-cell mdl-cell--8-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-300 mdl-shadow--4dp">
          <h2 class="mdl-color-text--grey-500" style="margin-bottom: 0px"><strong>Pautas</strong></h2>
          <h4 class="mdl-color-text--grey-700" style="margin-top: 0px"><strong><?php echo date("Y") ?></strong></h4>

          <div class="select">
            <select id="classee">
                <option selected disabled>Classe    </option>
                <option value="1a">       1a Classe </option>
                <option value="2a">       2a Classe </option>
                <option value="3a">       3a Classe </option>
                <option value="4a">       4a Classe </option>
            </select>
          </div>

          <div class="select">
            <select id="disciplinaa" onchange="loadtable(this)">
                <option selected disabled>    Disciplina      </option>
                <!-- <option value="port_">   Português       </option>
                <option value="mat_">         Matemática      </option>
                <option value="ing_">         Inglês          </option>
                <option value="artesvisuais_">Artes Visuais   </option>
                <option value="musica_">      Música          </option>
                <option value="edf_">         Educação Física </option>
                <option value="danca_">       Dança           </option> -->
            </select>
          </div>


          <table class="ui celled selectable unstackable structured table">
            <thead>
              <tr>
                <th class="center aligned" rowspan="2">Nome      </th>
                <th class="center aligned" colspan="3">Trimestre</th>
                <th class="center aligned" rowspan="2">Anual     </th>
              </tr>
              <tr>
                <th class="center aligned">1º</th>
                <th class="center aligned">2º</th>
                <th class="center aligned">3º</th>
              </tr>
            </thead>

            <tbody id="ktable" class="mdl-color-text--black">

            </tbody>
          </table>

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
    <script src="../../required/js/material-components-web/dist/material-components-web.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tabulator/3.4.4/js/tabulator.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>


  </body>
</html>
