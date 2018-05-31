<?php
$conn = mysqli_connect("oneworldacademymz.com", "oneworv0_admin", "admin", "oneworv0_students") or die ('I cannot connect to the database.');

// TODO TODO TODO: REMEMBER TO CHANGE THE DEFAULT YEAR IN DATABASE MANUALLY, IN PROFILES TABLE!

if (isset($_POST['addstudent'])) {
  $classeRaw = $_POST['slectclasse']; // like 1a, 2a, 3a...
  $importedfile = $_FILES['file']['tmp_name'];
  $date_year = date("Y");

  $sel = 'SELECT username FROM temp_profiles';
  $rowss = mysqli_query($conn, $sel);

  if(mysqli_num_rows($rowss)>0) {
    $error = "Erro: Detalhes já estão a ser submetidos. Por favor espere.";

  } else {

    if ($importedfile == null) {
      $error = "Por favor selecione o ficheiro para continuar.";
    } else {
      # If the selected classe is not pré
      if ($classeRaw !== "Pre") {
        $classe = $classeRaw.' Classe'; // like 1a Classe, 2a Classe, 3a Cl...
      } else {
        $classe = "Pré-Escolar";
      }

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

      // // Check if exists
      // $sql = 'SELECT TOP 1 profiles.username FROM profiles WHERE profiles.username = temp_profiles.username;';
      // $red_sql = mysqli_query($conn, $sql);


        // $sql = 'INSERT INTO profiles (first_name, last_name, username, started_year) SELECT * FROM temp_profiles';
        $sql = "INSERT INTO profiles (first_name, last_name, username, started_year, grade) SELECT *, '$classe' FROM temp_profiles WHERE NOT EXISTS (SELECT 1 FROM profiles WHERE profiles.username = temp_profiles.username)";
        $red_sql = mysqli_query($conn, $sql);

        echo mysqli_error($conn);

        // $sql = 'INSERT INTO mensalidades (id, payment_year) SELECT id, started_year FROM profiles, temp_profiles WHERE ;
        $sql = 'INSERT INTO mensalidades (id, payment_year) SELECT id, started_year FROM profiles, temp_profiles WHERE profiles.username=temp_profiles.username AND NOT EXISTS (SELECT 1 FROM mensalidades WHERE mensalidades.id = profiles.id AND mensalidades.payment_year = profiles.started_year)';
        $red_sql = mysqli_query($conn, $sql);
        echo mysqli_error($conn);

        if ($classeRaw !== "Pre") {
          foreach (${"disciplinas_".$classeRaw} as $disciplina) {
            $sql = "INSERT INTO `$disciplina`(nome_id, year) SELECT id, started_year FROM profiles, temp_profiles WHERE profiles.username=temp_profiles.username AND NOT EXISTS (SELECT 1 FROM `$disciplina` AS disc WHERE disc.nome_id=profiles.id AND disc.year=profiles.started_year)";
            $red_sql1 = mysqli_query($conn, $sql);
          }
        };
        echo mysqli_error($conn);

        $sql = 'TRUNCATE temp_profiles';
        $conn->query($sql);
        echo mysqli_error($conn);

        $success = "Alunos adicionados com sucesso.";
    }
  }

}

// $conn->close();

if (isset($_POST['addst_notcsv'])) {
  $classeRaw = $_POST['sc']; // like 1a, 2a, 3a...
  $date_year = $_POST['sa'];
  $student_names_Raw = $_POST['content'];

  $sel = 'SELECT username FROM temp_profiles';
  $rowss = mysqli_query($conn, $sel);

  if(mysqli_num_rows($rowss)>0) {
    $error_ = "Erro: Detalhes já estão a ser submetidos. Por favor espere.";
  } else {

    if (empty($student_names_Raw) || strlen($student_names_Raw)<= 3) {
      $error_ = "Por favor digite o(s) nome(s) do(s) aluno(s) para continuar.";
    }

    $names_list = preg_split('/\r\n|\r|\n|<br>|<\/div>/', $student_names_Raw, -1, PREG_SPLIT_NO_EMPTY);
    var_dump($names_list);



    //  else {
    //   # If the selected classe is not pré
    //   if ($classeRaw !== "Pre") {
    //     $classe = $classeRaw.' Classe'; // like 1a Classe, 2a Classe, 3a Cl...
    //   } else {
    //     $classe = "Pré-Escolar";
    //   }
    //
    //   $disciplinas_1a = ["port_1a", "mat_1a", "ing_1a", "artesvisuais_1a", "musica_1a", "edf_1a", "danca_1a"];
    //   $disciplinas_2a = ["port_2a", "mat_2a", "ing_2a", "artesvisuais_2a", "musica_2a", "edf_2a", "danca_2a"];
    //   $disciplinas_3a = ["port_3a", "mat_3a", "ing_3a", "artesvisuais_3a", "musica_3a", "edf_3a", "danca_3a", "cnaturais_3a"];
    //   $disciplinas_4a = ["port_4a", "mat_4a", "ing_4a", "artesvisuais_4a", "musica_4a", "edf_4a", "danca_4a", "cnaturais_4a", "csociais_4a"];
    //
    //   mysqli_query($conn, '
    //       LOAD DATA LOCAL INFILE "'.$importedfile.'"
    //           INTO TABLE temp_profiles
    //           FIELDS TERMINATED by \',\'
    //           LINES TERMINATED BY \'\n\'
    //   ');
    //
    //   // // Check if exists
    //   // $sql = 'SELECT TOP 1 profiles.username FROM profiles WHERE profiles.username = temp_profiles.username;';
    //   // $red_sql = mysqli_query($conn, $sql);
    //
    //
    //     // $sql = 'INSERT INTO profiles (first_name, last_name, username, started_year) SELECT * FROM temp_profiles';
    //     $sql = "INSERT INTO profiles (first_name, last_name, username, started_year, grade) SELECT *, '$classe' FROM temp_profiles WHERE NOT EXISTS (SELECT 1 FROM profiles WHERE profiles.username = temp_profiles.username)";
    //     $red_sql = mysqli_query($conn, $sql);
    //
    //     echo mysqli_error($conn);
    //
    //     // $sql = 'INSERT INTO mensalidades (id, payment_year) SELECT id, started_year FROM profiles, temp_profiles WHERE ;
    //     $sql = 'INSERT INTO mensalidades (id, payment_year) SELECT id, started_year FROM profiles, temp_profiles WHERE profiles.username=temp_profiles.username AND NOT EXISTS (SELECT 1 FROM mensalidades WHERE mensalidades.id = profiles.id AND mensalidades.payment_year = profiles.started_year)';
    //     $red_sql = mysqli_query($conn, $sql);
    //     echo mysqli_error($conn);
    //
    //     if ($classeRaw !== "Pre") {
    //       foreach (${"disciplinas_".$classeRaw} as $disciplina) {
    //         $sql = "INSERT INTO `$disciplina`(nome_id, year) SELECT id, started_year FROM profiles, temp_profiles WHERE profiles.username=temp_profiles.username AND NOT EXISTS (SELECT 1 FROM `$disciplina` AS disc WHERE disc.nome_id=profiles.id AND disc.year=profiles.started_year)";
    //         $red_sql1 = mysqli_query($conn, $sql);
    //       }
    //     };
    //     echo mysqli_error($conn);
    //
    //     $sql = 'TRUNCATE temp_profiles';
    //     $conn->query($sql);
    //     echo mysqli_error($conn);
    //
    //     $success_ = "Alunos adicionados com sucesso.";
    // }
  }

};



 ?>
