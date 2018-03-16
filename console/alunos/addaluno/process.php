<?php
$conn = mysqli_connect("oneworldacademymz.com", "oneworv0_admin", "admin", "oneworv0_students") or die ('I cannot connect to the database.');

if (isset($_POST['addstudent'])) {
  $classeRaw = $_POST['slectclasse']; // like 1a, 2a, 3a...
  $importedfile = $_FILES['file']['tmp_name'];
  $date_year = date("Y");

  $sel = 'SELECT username FROM temp_profiles';
  $rowss = mysqli_query($conn, $sel);

  if(mysqli_num_rows($rowss)>0) {
    $error = "Detalhes já estão a ser submetidos. Por favor espere.";

  } else {

    if ($importedfile == null) {
      $error = "Por favor selecione o ficheiro para continuar.";
    } else {
      # code...
      $classe = $classeRaw.' Classe'; // like 1a Classe, 2a Classe, 3a Cl...

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

        foreach (${"disciplinas_".$classeRaw} as $disciplina) {
          // $query3 = "INSERT INTO `$disciplina`(nome_id, year) SELECT id, started_year FROM profiles, temp_profiles WHERE profiles.username=temp_profiles.username";
          $sql = "INSERT INTO `$disciplina`(nome_id, year) SELECT id, started_year FROM profiles, temp_profiles WHERE profiles.username=temp_profiles.username AND NOT EXISTS (SELECT 1 FROM `$disciplina` AS disc WHERE disc.nome_id=profiles.id AND disc.year=profiles.started_year)";
          $red_sql1 = mysqli_query($conn, $sql);
        };

        $sql = 'TRUNCATE temp_profiles';
        $conn->query($sql);


        // if ($classeRaw == "1a") {
        //   foreach ($disciplinas_1a as $disciplina) {
        //     // $query3 = "INSERT INTO `$disciplina`(nome_id, year) SELECT id, started_year FROM profiles, temp_profiles WHERE profiles.username=temp_profiles.username";
        //     $sql = "INSERT INTO `$disciplina`(nome_id, year) SELECT id, started_year FROM profiles, temp_profiles WHERE profiles.username=temp_profiles.username AND NOT EXISTS (SELECT 1 FROM `$disciplina` AS disc WHERE disc.nome_id=profiles.id AND disc.year=profiles.started_year)";
        //     $red_sql1 = mysqli_query($conn, $sql);
        //   };
        //
        //   $sql = 'TRUNCATE temp_profiles';
        //   $conn->query($sql);
        //
        // } else if ($classeRaw == "2a") {
        //   foreach ($disciplinas_2a as $disciplina) {
        //     $sql = "INSERT INTO `$disciplina`(nome_id, year) SELECT id, started_year FROM profiles, temp_profiles WHERE profiles.username=temp_profiles.username AND NOT EXISTS (SELECT 1 FROM `$disciplina` AS disc WHERE disc.nome_id=profiles.id AND disc.year=profiles.started_year)";
        //     $red_sql1 = mysqli_query($conn, $sql);
        //   };
        //
        //   $sql = 'TRUNCATE temp_profiles';
        //   $conn->query($sql);
        //
        // } else if ($classeRaw == "3a") {
        //   foreach ($disciplinas_3a as $disciplina) {
        //     $sql = "INSERT INTO `$disciplina`(nome_id, year) SELECT id, started_year FROM profiles, temp_profiles WHERE profiles.username=temp_profiles.username AND NOT EXISTS (SELECT 1 FROM `$disciplina` AS disc WHERE disc.nome_id=profiles.id AND disc.year=profiles.started_year)";
        //     $red_sql1 = mysqli_query($conn, $sql);
        //   };
        //
        //   $sql = 'TRUNCATE temp_profiles';
        //   $conn->query($sql);
        //
        // } else if ($classeRaw == "4a") {
        //   foreach ($disciplinas_3a as $disciplina) {
        //     $sql = "INSERT INTO `$disciplina`(nome_id, year) SELECT id, started_year FROM profiles, temp_profiles WHERE profiles.username=temp_profiles.username AND NOT EXISTS (SELECT 1 FROM `$disciplina` AS disc WHERE disc.nome_id=profiles.id AND disc.year=profiles.started_year)";
        //     $red_sql1 = mysqli_query($conn, $sql);
        //   };
        //
        //   $sql = 'TRUNCATE temp_profiles';
        //   $conn->query($sql);
        //
        // } else if ($classeRaw == "5a") {
        //   $error = "Ainda não é possível efectuar esta operação.";
        //
        // } else if ($classeRaw == "6a") {
        //   $error = "Ainda não é possível efectuar esta operação.";
        //
        // } else if ($classeRaw == "7a") {
        //   $error = "Ainda não é possível efectuar esta operação.";
        // }





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

}

$conn->close();
 ?>
