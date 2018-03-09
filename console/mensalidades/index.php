<?php
  // If entered illegally
  // if(!isset($_POST['submit'])){
  //   header("location: ../"); // Redirect To Profile Page
  // }

  # code...
  include('../../parents/session.php'); // Includes session Script

  if ($_SESSION['login_user'] !== "oneworldacademy") {
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Console - OWA</title>
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
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tabulator/3.4.4/css/tabulator.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../../required/css/app.css">

    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.cellEdit.js"></script>


    <script type="text/javascript">
      function loadtable(e){
        var syear = e.value;
        console.log(syear);
        // $("#ktable").html('<div style="margin: 40px" class="la-ball-fall la-dark"><div></div><div></div><div></div></div>');

        // tableeee.destroy();
        // tableeee.MakeCellsEditable("destroy");

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

        var tableeee = $('#tablee').DataTable({
          // Features
          "serverside": true,
          "searching": true,
          "ordering": false,
          "info":     false,
          "paging": false,
          // "pagingType": "simple",

          // Other
          // "autowidth": true,
          ajax: {
            url: 'mensalidades/mensalidades.php',
            type: 'POST',
            data:'syear='+syear,
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
              url: "mensalidades/saveedit.php",
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
          console.log($(this).val());
        });

        $('#tablee_wrapper > div > div:nth-child(1)').hide();


      };

      $(document).ready(function() {
          // var syear = document.getElementById('anoo').value;
          // $("#ktable").html('<div style="margin: 40px" class="la-ball-fall la-dark"><div></div><div></div><div></div></div>');
          loadtable(document.getElementById('anoo'));
          
          // console.log(tableeee);
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
        <a href="../" style="text-decoration: none; color: inherit" class="mdl-layout-title">
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
        <div style="margin-top: 30px; border-radius: 15px; padding: 20px" class="mdl-cell mdl-cell--3-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-200 mdl-shadow--4dp">
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
            <a href="../pautas" style="text-transform: none; width: 100%; text-align: left" class="ui basic button">
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
            Log Out
          </a>
        </div>

        <!--  opacity: .3; pointer-events: none -->
        <!-- EDITAR NOTAS -->
        <div style="margin-top: 30px; padding: 20px; border-radius: 15px; overflow-x: auto" class="mdl-cell mdl-cell--9-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-300 mdl-shadow--4dp">
          <h2 class="mdl-color-text--grey-500" style="margin-bottom: 0px"><strong>Mensalidades</strong></h2>

          <div class="select">
            <select id="anoo" onchange="loadtable(this)">
                <option selected disabled>   Ano   </option>
                <?php for ($i=2017; $i < date('Y')+6; $i++) { ?>
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

      <footer style="text-align: center;" class="mdl-mega-footer">
        <div class="mdl-mega-footer__middle-section">
        </div>

        <div class="mdl-mega-footer__bottom-section">
          <div class="mdl-layout-spacer"></div>
          <div><script>document.write((new Date()).getFullYear())</script> © One World Academy Primary School</div>
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
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.semanticui.min.js"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.js"></script>
    <script src="https://cdn.datatables.net/scroller/1.4.4/js/dataTables.scroller.min.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.10.16/filtering/type-based/accent-neutralise.js"></script>
    <script src="../../required/js/material-components-web/dist/material-components-web.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tabulator/3.4.4/js/tabulator.min.js"></script>
    <!-- <script type="text/javascript" src="js/app.js"></script> -->

  </body>
</html>
