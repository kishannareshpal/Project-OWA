<?php

  include('session.php'); // Includes session Script

  if ($_SESSION['login_user'] === "oneworldacademy") {
    header("location: ../console/"); // Redirect To Profile Page
  }

  if(!isset($_SESSION['login_user'])){
    @header("location: ../"); // Redirecting To Profile Page
    print_r("Usuário não autenticado. Por favor volte e autentique-se.");
    die();
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- TODO: Add essential meta tags later -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu Aluno - OWA</title>
    <!-- hosted css's -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css">
    <link rel="stylesheet" href="../required/js/material-components-web/dist/material-components-web.min.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-blue.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Open+Sans|Karma">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../required/css/app.css">

    <script src="//code.jquery.com/jquery-latest.min.js"></script>
  </head>

<body class="mdl-color--grey-100">

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"> <!-- rgba(72, 130, 251, 0.71) -->
    <header style="height: 150px;" class="mdl-color--green-300 mdl-layout__header mdl-layout__header--scroll mdl-layout__header--transparent"> <!-- himage -->
      <!-- page header -->
      <div style="margin-top: 13px; padding-left: 10px" class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
        <!-- Title -->
        <span><img src="../images/logo.png" width='50px'></span>
        <a href="../" style="text-decoration: none; color: inherit" class="mdl-layout-title">
          <h3 style="font-family: 'Karma'; font-size: 16px; margin-bottom: 0px; text-shadow: 1px 1px rgba(43, 43, 43, 0.8); margin-top: 0px" class="mdl-layout-title"><strong>Escola Primária</strong></h3>
          <span style="font-family: 'Karma'; font-size: 20px; text-shadow: 1px 1px rgba(43, 43, 43, 0.8);">
            <strong>One World Academy</strong>
          </span>
        </a>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
      </div>
      <h1 style="text-align: center"><strong>Meu Aluno</strong></h1>
    </header>

    <main class="mdl-layout__content">
      <!-- page content -->
      <div class="mdl-grid">
        <div style="border-radius: 15px; margin-top: 20px" class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-200 hoverable">
            <div style="padding: 40px" class="">
              <h2 class="mdl-color-text--grey-400"><strong>Info do Aluno</strong></h2>
              <h4 class="mdl-color-text--grey-800" style="margin-bottom: 0px"><strong>Nome: </strong><?php echo $ls__first_name." ".$ls__last_name ?></h4>
              <h4 class="mdl-color-text--grey-200;" style="margin-top: 5px"><strong>Classe: </strong><?php echo $ls__grade ?></h5>
              <a href="logout.php" class="mdl-button mdl-color--grey-300 mdl-color-text--red-400">Sair</a>
            </div>
        </div>
      </div>


      <div class="mdl-grid" style="margin-bottom: 350px;">
        <div style="margin-top: 30px; border-radius: 15px; padding: 20px" class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-400 mdl-shadow--4dp">
          <h2 class="mdl-color-text--grey-200" style="margin-bottom: 0px"><strong>Mensalidade</strong></h2>
          <h4 class="mdl-color-text--grey-300" style="margin-top: 0px"><strong>Ano: <?php echo date('Y') ?></strong></h4>
          <table style="border-width: 0px" class="ui unstackable selectable compact table mdl-color--grey-200">
            <thead>
              <tr class="mdl-color-text--grey-700">
                <th><span style="mdl-color-text--grey-500">Mês</span></th>
                <th class="center aligned"><span style="mdl-color-text--grey-500">Pago</span></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="collapsing">
                  Mês de Fevereiro
                </td>
                <?php if($ls__fev) : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Março
                </td>
                <?php if($ls__mar) : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr> <!-- class="disabled" -->
                <td class="collapsing">
                  Mês de Abril
                </td>
                <?php if($ls__abr) : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Maio
                </td>
                <?php if($ls__mai) : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Junho
                </td>
                <?php if($ls__jun) : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Julho
                </td>
                <?php if($ls__jul) : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>

              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Agosto
                </td>
                <?php if($ls__ago) : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Setembro
                </td>
                <?php if($ls__set) : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Outubro
                </td>
                <?php if($ls__out) : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>
              </tr>

              <tr>
                <td class="collapsing">
                  Mês de Novembro
                </td>
                <?php if($ls__nov) : ?>
                  <td class="center aligned"><i class="green checkmark icon"></i></td>
                <?php else : ?>
                  <td class="center aligned"></td>
                <?php endif; ?>

              </tr>
            </tbody>
          </table>
        </div>



        <!--  opacity: .3; pointer-events: none -->
        <div style="margin-top: 30px; padding: 20px; border-radius: 15px; overflow-x: auto" class="mdl-cell mdl-cell--8-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-color--grey-300 mdl-shadow--4dp">
          <h2 class="mdl-color-text--grey-500"><strong>Pauta</strong></h2>

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
                    url: "notas_st.php",
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
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="../required/js/material-components-web/dist/material-components-web.min.js"></script>
    <script src="years.js"></script>


  </body>
</html>
