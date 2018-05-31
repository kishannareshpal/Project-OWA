<?php
  # connect to the database
  $conn = mysqli_connect("oneworldacademymz.com", "oneworv0_admin", "admin", "oneworv0_students") or die ('I cannot connect to the database.');

  # Retrieve the vars from the post ajax.
  $id     = $_POST['id'];
  $classeRaw = $_POST['classe'];

  if ($classeRaw !== "Pre") {
    $classe = $classeRaw.' Classe'; // like 1a Classe, 2a Classe, 3a Cl...
  } else {
    $classe = "Pré-Escolar";
  }

  # Define all classes
  $disciplinas_1a = ["port_1a", "mat_1a", "ing_1a", "artesvisuais_1a", "musica_1a", "edf_1a", "danca_1a"];
  $disciplinas_2a = ["port_2a", "mat_2a", "ing_2a", "artesvisuais_2a", "musica_2a", "edf_2a", "danca_2a"];
  $disciplinas_3a = ["port_3a", "mat_3a", "ing_3a", "artesvisuais_3a", "musica_3a", "edf_3a", "danca_3a", "cnaturais_3a"];
  $disciplinas_4a = ["port_4a", "mat_4a", "ing_4a", "artesvisuais_4a", "musica_4a", "edf_4a", "danca_4a", "cnaturais_4a", "csociais_4a"];

  # Delete the profile record
  $red_sql = "DELETE FROM profiles WHERE id='".$id."'";
  mysqli_query($conn, $red_sql);

  # Delete the records from disciplinas
  if ($classeRaw !== "Pre") {
    foreach (${"disciplinas_".$classeRaw} as $disciplina) {
      // $query3 = "INSERT INTO `$disciplina`(nome_id, year) SELECT id, started_year FROM profiles, temp_profiles WHERE profiles.username=temp_profiles.username";
      $sql = "DELETE FROM `$disciplina` WHERE nome_id='".$id."'";
      $red_sql = mysqli_query($conn, $sql);
    }
  }

  # Check request result:
  if (!$red_sql){
    # if anything failed
    echo "error";

  } else {
    # if everything went smoothly :P
    echo $id;
  }

  // $conn->close();

?>
