<?php
  // If entered illegally
  // if(!isset($_POST['submit'])){
  //   header("location: ../"); // Redirect To Profile Page
  // }

  # code...
  include('../../../parents/session.php'); // Includes session Script
  // include_once('notas/notas.php'); // Includes session Script
  // include('tabledata.php');

  if ($_SESSION['login_user'] !== "oneworldacademy") {
    @header("location: ../../../"); // Redirect To Profile Page
    print_r("Error 405");
    die();
  }

  $conn = mysqli_connect("oneworldacademymz.com", "oneworv0_admin", "admin", "oneworv0_students") or die ('I cannot connect to the database.');

  if (isset($_POST['addstudent'])) {
    // $classeRaw = $_POST['slectclasse']; // like 1a, 2a, 3a...
    $importedfile = $_FILES['file']['tmp_name'];
    $date_year = date("Y");

    if ($importedfile == null) {
      $error = "Por favor selecione o ficheiro para continuar.";
    } else {
      # code...
      // $classe = $classeRaw.' Classe'; // like 1a Classe, 2a Classe, 3a Cl...

      $disciplinas_1a = ["port_1a", "mat_1a", "ing_1a", "artesvisuais_1a", "musica_1a", "edf_1a", "danca_1a"];
      $disciplinas_2a = ["port_2a", "mat_2a", "ing_2a", "artesvisuais_2a", "musica_2a", "edf_2a", "danca_2a"];
      $disciplinas_3a = ["port_3a", "mat_3a", "ing_3a", "artesvisuais_3a", "musica_3a", "edf_3a", "danca_3a", "cnaturais_3a"];
      $disciplinas_4a = ["port_4a", "mat_4a", "ing_4a", "artesvisuais_4a", "musica_4a", "edf_4a", "danca_4a", "cnaturais_4a", "csociais_4a"];

      mysqli_query($conn, '
          LOAD DATA LOCAL INFILE "'.$importedfile.'"
              INTO TABLE temp_profiles
              FIELDS TERMINATED by \',\'
              LINES TERMINATED BY \'\n\'
      ');

      $sql = 'INSERT INTO profiles (first_name, last_name, username, started_year) SELECT * FROM temp_profiles';
      $red_sql = mysqli_query($conn, $sql);

      $sql = 'INSERT INTO mensalidades (id, payment_year) SELECT id, started_year FROM profiles, temp_profiles WHERE profiles.username=temp_profiles.username';
      $red_sql = mysqli_query($conn, $sql);

      foreach ($disciplinas_1a as $disciplina) {
        $query3 = "INSERT INTO `$disciplina`(nome_id, year) SELECT id, started_year FROM profiles, temp_profiles WHERE profiles.username=temp_profiles.username";
        $red_sql1 = mysqli_query($conn, $query3);
      };

      $sql = 'TRUNCATE temp_profiles';
      $conn->query($sql);

      $error = mysqli_error($conn);

      // $file = fopen($importedfile, 'r');
      // while ($row = fgetcsv($file)) {
      //   $value = "'".implode("','", $row)."'";
      //   $username = explode(',', $value)[2];
      //   // var_dump($value);
      //   // var_dump($username);
      //
      //
      //   if ($classeRaw=="1a") {
      //     // insert data to 1a classe
      //     $query0 = "INSERT INTO profiles(first_name, last_name, username, started_year, grade) VALUES (". $value.",'" . $classe . "'" .")";
      //     mysqli_query($conn, $query0);
      //
      //     $query2 = "SELECT id FROM profiles WHERE username=$username";
      //     $red_sql = mysqli_query($conn, $query2);
      //     $id_of_new_user = mysqli_fetch_assoc($red_sql);
      //     $id = $id_of_new_user['id'];
      //
      //     // $query1 = "INSERT INTO mensalidades(id) VALUES (". $id.")";
      //     // mysqli_query($conn, $query1);
      //
      //     foreach ($disciplinas_1a as $disciplina) {
      //       $query3 = "INSERT INTO `$disciplina`(nome_id, year) VALUES ('$id', '$date_year')";
      //       // var_dump($query3);
      //       $red_sql1 = mysqli_query($conn, $query3);
      //     };
      //
      //   } else if ($classeRaw=="2a") {
      //     // insert data to 2a classe
      //     $query0 = "INSERT INTO profiles(first_name, last_name, username, started_year, grade) VALUES (". $value.",'" . $classe . "'" .")";
      //     mysqli_query($conn, $query0);
      //
      //     $query2 = "SELECT id FROM profiles WHERE username=$username";
      //     $red_sql = mysqli_query($conn, $query2);
      //     $id_of_new_user = mysqli_fetch_assoc($red_sql);
      //     $id = $id_of_new_user['id'];
      //
      //     $query1 = "INSERT INTO mensalidades(id) VALUES (". $id.")";
      //     mysqli_query($conn, $query1);
      //
      //     foreach ($disciplinas_2a as $disciplina) {
      //       $query3 = "INSERT INTO `$disciplina`(nome_id, year) VALUES ('$id', '$date_year')";
      //       // var_dump($query3);
      //       $red_sql1 = mysqli_query($conn, $query3);
      //     };
      //
      //
      //   } elseif ($classeRaw=="3a") {
      //     // insert data to 3a classe
      //     $query0 = "SET autocommit=0; INSERT INTO profiles(first_name, last_name, username, started_year, grade) VALUES (". $value.",'" . $classe . "'" ."); COMMIT";
      //     mysqli_query($conn, $query0);
      //
      //     $query2 = "SELECT id FROM profiles WHERE username=$username";
      //     $red_sql = mysqli_query($conn, $query2);
      //     $id_of_new_user = mysqli_fetch_assoc($red_sql);
      //     $id = $id_of_new_user['id'];
      //
      //     $query1 = "INSERT INTO mensalidades(id) VALUES (". $id.")";
      //     mysqli_query($conn, $query1);
      //
      //     foreach ($disciplinas_3a as $disciplina) {
      //       $query3 = "INSERT INTO `$disciplina`(nome_id, year) VALUES ('$id', '$date_year')";
      //       // var_dump($query3);
      //       $red_sql1 = mysqli_query($conn, $query3);
      //     };
      //
      //
      //   } elseif ($classeRaw=="4a") {
      //     // insert data to 4a classe
      //     $query0 = "INSERT INTO profiles(first_name, last_name, username, started_year, grade) VALUES (". $value.",'" . $classe . "'" .")";
      //     mysqli_query($conn, $query0);
      //
      //     $query2 = "SELECT id FROM profiles WHERE username=$username";
      //     $red_sql = mysqli_query($conn, $query2);
      //     $id_of_new_user = mysqli_fetch_assoc($red_sql);
      //     $id = $id_of_new_user['id'];
      //
      //     $query1 = "INSERT INTO mensalidades(id) VALUES (". $id.")";
      //     mysqli_query($conn, $query1);
      //
      //     foreach ($disciplinas_4a as $disciplina) {
      //       $query3 = "INSERT INTO `$disciplina`(nome_id, year) VALUES ('$id', '$date_year')";
      //       // var_dump($query3);
      //       $red_sql1 = mysqli_query($conn, $query3);
      //     };
      //   }
      // }

      $success = "Alunos adicionados com sucesso.";
    }

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
          <h2 class="mdl-color-text--grey-500" style="margin-bottom: 0px"><strong>Alunos Registados</strong></h2>

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
