<?php
  // If entered illegally
  // if(!isset($_POST['submit'])){
  //   header("location: ../"); // Redirect To Profile Page
  // }

  # code...
  include('../../alunos/session.php'); // Includes session Script

  if ($_COOKIE['lu'] !== "owa") {
    @header("location: ../../"); // Redirect To Profile Page
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
    <title>Mensalidades - OWA Console</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.semanticui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css">
    <link rel="stylesheet" href="../../required/js/material-components-web/dist/material-components-web.min.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-blue.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/1.4.4/css/scroller.dataTables.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Open+Sans|Karma">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../required/css/app.css">

    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.cellEdit.js"></script>


    <style media="screen">
      .dataTables_filter, .dataTables_info {
         display: none;
      }
    </style>


    <script type="text/javascript">
      var tableeee;
        function loadtable(e){
          var syear = e.value;
          // $("#ktable").html('<div style="margin: 40px" class="la-ball-fall la-dark"><div></div><div></div><div></div></div>');

          if ($.fn.DataTable.isDataTable('#tablee')) {
            $('#tablee').DataTable().destroy();
            tableeee.MakeCellsEditable("destroy");
            $('#tablee_wrapper > div > div:nth-child(1)').hide();
          }



          // $.ajax({
          //   url: "mensalidades/mensalidades.php",
          //   type: "POST",
          //   data: 'syear='+syear,
          //   success: function(response){
          //     if (response === "") {
          //       $("#ktable").html("<div style='margin: 40px' class='mdl-color-text--red-200'>Erro 809</div>");
          //     } else {
          //       $("#ktable").html(response);
          //     }
          //   }
          //  });

          tableeee = $('#tablee').DataTable({
            // Features
            "processing": true,
            "serverside": true,
            "searching": true,
            "ordering": false,
            "info": false,
            "paging": false,
            // "pagingType": "simple",

            // Other
            // "autowidth": true,
            "language": {"url": "portuguese.json"},
            ajax: {
              url: 'mensalidades.php',
              type: 'POST',
              data: {
                "syear": syear
              }
            },

            columns: [
              {data: 'fullname'},
              {data: 'fev'},
              {data: 'mar'},
              {data: 'abr'},
              {data: 'mai'},
              {data: 'jun'},
              {data: 'jul'},
              {data: 'ago'},
              {data: 'sete'},
              {data: 'outu'},
              {data: 'nov'}
            ],

            "createdRow": function(row, data, index) {
              if ( data.fev == "Não" ) {
                $(row.children[1]).addClass('negative');
              } else{
                $(row.children[1]).addClass('positive');
              }

              if ( data.mar == "Não" ) {
                $(row.children[2]).addClass('negative');
              } else{
                $(row.children[2]).addClass('positive');
              }

              if ( data.abr == "Não" ) {
                $(row.children[3]).addClass('negative');
              } else{
                $(row.children[3]).addClass('positive');
              }

              if ( data.mai == "Não" ) {
                $(row.children[4]).addClass('negative');
              } else{
                $(row.children[4]).addClass('positive');
              }

              if ( data.jun == "Não" ) {
                $(row.children[5]).addClass('negative');
              } else{
                $(row.children[5]).addClass('positive');
              }

              if ( data.jul == "Não" ) {
                $(row.children[6]).addClass('negative');
              } else{
                $(row.children[6]).addClass('positive');
              }

              if ( data.ago == "Não" ) {
                $(row.children[7]).addClass('negative');
              } else{
                $(row.children[7]).addClass('positive');
              }

              if ( data.sete == "Não" ) {
                $(row.children[8]).addClass('negative');
              } else{
                $(row.children[8]).addClass('positive');
              }

              if ( data.outu == "Não" ) {
                $(row.children[9]).addClass('negative');
              } else{
                $(row.children[9]).addClass('positive');
              }

              if ( data.nov == "Não" ) {
                $(row.children[10]).addClass('negative');
              } else{
                $(row.children[10]).addClass('positive');
              }

              $('#tablee_wrapper > div > div:nth-child(1)').hide();
            },

            scrollY:        350,
            deferRender:    true,
            // "order": [[ 0, "asc" ]], // I can't now because it will mess up the stuff.
          });


          function myCallbackFunction (updatedCell, updatedRow, oldValue) {
              // console.log("The new value for the cell is: " + updatedCell.data());
              // console.log(updatedCell);
              // console.log(updatedRow);
              var td = document.getElementById('ktable').children[updatedRow[0][0]].children[updatedCell[0][0]['column']];

              var syear = document.getElementById('anoo').value;
              var fullname = td.parentElement.children[0].innerHTML
              var mes = document.getElementById('ktable_header').children[(updatedCell[0][0]['column'])-1].innerHTML;
              var value = updatedCell.data();

                // debug:
                // console.log('td', td);
                // console.log('mes', mes);
                // console.log('ano', syear);
                //
                // console.log('updatedRow', updatedRow);
                // console.log('updatedCell', updatedCell);

                // prod:
                // console.log('year', syear);
                // console.log('fullname', fullname);
                // console.log('mes', mes);
                // console.log('value', value);

              // $(td).animate({backgroundColor: '#defcb3'});
              //
              // setTimeout(function () {
              //   $(td).animate({backgroundColor: '#ffffff'});
              // }, 1000);
              //
              // if (updatedCell.data() == 1) {
              //   $(td).animate({color: '#19a65e'});
              // } else {
              //   $(td).animate({color: '#000000'});
              // }

              $.ajax({
                url: "saveedit.php",
                type: "POST",
                data:'fullname='+fullname + '&syear='+syear + '&smes='+mes + '&vall='+value,
                success: function(response){
                  // console.log(data);
                  if (response === "done") {
                    $(td).animate({backgroundColor: '#defcb3'});
                    setTimeout(function () {
                      $(td).animate({backgroundColor: '#ffffff'});
                    }, 1000);

                    if (value == "Sim") {
                      td.classList = '';
                      $(td).addClass('positive');
                    } else {
                      td.classList = '';
                      $(td).addClass('negative');
                    }

                  } else { //if (data === "error")
                    $(td).animate({backgroundColor: '#d14141'});
                    setTimeout(function () {
                      $(td).animate({backgroundColor: '#ffffff'});
                    }, 1500);
                  }
                }
               });

          }

          tableeee.MakeCellsEditable({
              "onUpdate": myCallbackFunction,
              "columns": [1,2,3,4,5,6,7,8,9,10],
              // "inputCss": 'ui checkbox',
              "inputTypes": [{
                "column": 1,
                "type":"list",
                "options":[
                    { "value": "Sim", "display": "Pagou" },
                    { "value": "Não", "display": "Não Pagou" },]
              },
              {
                "column": 2,
                "type":"list",
                "options":[
                    { "value": "Sim", "display": "Pagou" },
                    { "value": "Não", "display": "Não Pagou" },
              ]},
              {
                "column": 3,
                "type":"list",
                "options":[
                    { "value": "Sim", "display": "Pagou" },
                    { "value": "Não", "display": "Não Pagou" },
              ]},
              {
                "column": 4,
                "type":"list",
                "options":[
                    { "value": "Sim", "display": "Pagou" },
                    { "value": "Não", "display": "Não Pagou" },
              ]},
              {
                "column": 5,
                "type":"list",
                "options":[
                    { "value": "Sim", "display": "Pagou" },
                    { "value": "Não", "display": "Não Pagou" },
              ]},
              {
                "column": 6,
                "type":"list",
                "options":[
                    { "value": "Sim", "display": "Pagou" },
                    { "value": "Não", "display": "Não Pagou" },
              ]},
              {
                "column": 7,
                "type":"list",
                "options":[
                    { "value": "Sim", "display": "Pagou" },
                    { "value": "Não", "display": "Não Pagou" },
              ]},
              {
                "column": 8,
                "type":"list",
                "options":[
                    { "value": "Sim", "display": "Pagou" },
                    { "value": "Não", "display": "Não Pagou"},
              ]},
              {
                "column": 9,
                "type":"list",
                "options":[
                    { "value": "Sim", "display": "Pagou" },
                    { "value": "Não", "display": "Não Pagou" },
              ]},
              {
                "column": 10,
                "type":"list",
                "options":[
                    { "value": "Sim", "display": "Pagou" },
                    { "value": "Não", "display": "Não Pagou"},
              ]},
            ],
          });

          $('#searchbox').keyup(function(){
            tableeee.search($(this).val()).draw();
            // console.log($(this).val());
          });

          $(document).on('preInit.dt', function () {
            $('#tablee_wrapper > div > div:nth-child(1)').hide();
          });

        };

        $(document).ready(function() {
            // var syear = document.getElementById('anoo').value;
            // $("#ktable").html('<div style="margin: 40px" class="la-ball-fall la-dark"><div></div><div></div><div></div></div>');
            // console.log(tableeee);
            loadtable(document.getElementById('anoo'));
            $('#tablee_wrapper > div > div:nth-child(1)').hide();
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
        <span><img src="../../images/logo.png" width='50px'></span>
        <a href="../../" style="text-decoration: none; color: inherit" class="mdl-layout-title">
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

            <a href="../alunos/editaluno/" style="text-transform: none; width: 100%; text-align: left" class="ui basic button">
              <i class="ui edit outline black icon"></i>
              Alunos registados
            </a>

            <a href="../alunos/addaluno/" style="text-transform: none; width: 100%; margin-top: 10px; text-align: left" class="ui basic button">
              <i class="ui add user black icon"></i>
              Adicionar aluno(s)
            </a>
          </div>

          <div class="ui divider"></div>

          <div>
            <a href="../pautas/" style="text-transform: none; width: 100%; text-align: left" class="ui basic button">
              <i class="ui file alternate black icon"></i>
              Pautas
            </a>

            <a href="#" style="text-transform: none; width: 100%; margin-top: 10px; text-align: left" class="ui blue button">
              <i class="ui money bill white alternate outline icon"></i>
              Mensalidades
            </a>
          </div>

          <a href="../logout.php" style="margin-top: 10px;" class="ui labeled icon red button">
            <i class="log out icon"></i>
            Sair da conta
          </a>
        </div>

        <!--  opacity: .3; pointer-events: none -->
        <!-- EDITAR NOTAS -->
        <div style="margin-top: 30px; padding: 20px; border-radius: 15px; overflow-x: auto" class="mdl-cell mdl-cell--9-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-300">
          <h2 class="mdl-color-text--grey-500" style="margin-bottom: 0px"><strong>Mensalidades</strong></h2>

          <div class="select">
            <select id="anoo" onchange="loadtable(this)">
                <option selected disabled>Ano</option>
                <?php for ($i=2017; $i < date('Y'); $i++) { ?>
                  <option <?php if($i+1 == date('Y')){?>selected<?php };?> value="<?php echo $i+1 ?>"><?php echo $i+1 ?></option>
                <?php }; ?>
            </select>

            <!-- <script type="text/javascript">
              loadtable(document.getElementById('anoo'));
            </script> -->
          </div>

          <!-- <div style="width: 100%; margin-top: 20px" class="ui icon input">
            <input type="text" placeholder="Procurar...">
            <i class="circular search link icon"></i>
          </div> -->
          <br>

          <div class="ui icon input" style="width: 100%; margin-top: 20px; margin-bottom: 20px">
            <input id="searchbox" type="text" placeholder="Procurar...">
            <i class="search icon"></i>
          </div>

          <table id="tablee" class="ui selectable celled unstackable structured table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="center aligned" rowspan="2">Aluno</th>
                <th class="center aligned" colspan="10">Mês (Pagou?)</th>
              </tr>
              <tr id='ktable_header' style="font-size: 10px">
                <th class="center aligned">Fev</th>
                <th class="center aligned">Mar</th>
                <th class="center aligned">Abr</th>
                <th class="center aligned">Mai</th>
                <th class="center aligned">Jun</th>
                <th class="center aligned">Jul</th>
                <th class="center aligned">Ago</th>
                <th class="center aligned">Sete</th>
                <th class="center aligned">Outu</th>
                <th class="center aligned">Nov</th>
                <!-- 10 th's -->
              </tr>
            </thead>

            <tbody id="ktable" class="mdl-color-text--black">
            </tbody>
          </table>

        </div>
      </div>

      <footer id="footer" style="text-align: center; font-family: karma" class="mdl-mega-footer mdl-color--grey-100">
        <div class="mdl-mega-footer__middle-section">
        </div>

        <div class="mdl-mega-footer__bottom-section">
          <div class="mdl-layout-spacer"></div>

          <img src="../../images/logo.png" width='32px' alt="">
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
          <p>Maxixe, Moçambique</p>
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
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.semanticui.min.js"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.js"></script>
    <script src="https://cdn.datatables.net/scroller/1.4.4/js/dataTables.scroller.min.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.10.16/filtering/type-based/accent-neutralise.js"></script>
    <script src="../../required/js/material-components-web/dist/material-components-web.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tabulator/3.4.4/js/tabulator.min.js"></script>
    <!-- <script type="text/javascript" src="js/app.js"></script> -->
    <script type="text/javascript">
      document.onreadystatechange = function () {
          var state = document.readyState;

          if (state == 'complete') {
              document.getElementById("footer").removeAttribute("hidden", "");
          }
      };
    </script>
  </body>
</html>
