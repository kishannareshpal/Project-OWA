<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {

    # essentials
    $id = $_POST['id'];
    $ano = $_POST['current_ano'];
    $classe = $_POST['current_classe'];
    $result['pn'] = array(); // profile notas

    $result['suc'] = array(); // success report
    $result['err'] = array(); // error report


    # Now make a connection to the database – UP SERVER:
    $db_host = "upmaxixe.ac.mz"; // database host
    $db_username = "upmaxixe"; // database username
    $db_password = "uPM@kxiX3.,2016"; // database password
    $db_database = "upmaxixe"; // database name



    # Now make a connection to the database:
    // $db_host = "oneworldacademymz.com"; // database host
    // $db_username = "oneworv0_admin"; // database username
    // $db_password = "admin"; // database password
    // $db_database = "oneworv0_students"; // database name
    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_database); // estabilish a connection now


    # Start the querying...
    ## 1. Query the student's NOTAS (Error Code: 104)
    if ($classe == "1a Classe") {
      $sql = "SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Português' FROM port_1a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Matemática' FROM mat_1a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Inglês' FROM ing_1a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Artes Visuais' FROM artesvisuais_1a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Música' FROM musica_1a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Educação Física' FROM edf_1a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Dança' FROM danca_1a WHERE nome_id=$id AND year=$ano";

    } elseif ($classe == "2a Classe") {
      $sql = "SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Português' FROM port_2a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Matemática' FROM mat_2a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Inglês' FROM ing_2a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Artes Visuais' FROM artesvisuais_2a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Música' FROM musica_2a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Educação Física' FROM edf_2a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Dança' FROM danca_2a WHERE nome_id=$id AND year=$ano";

    } elseif ($classe == "3a Classe") {
      $sql = "SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Português' FROM port_3a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Matemática' FROM mat_3a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Inglês' FROM ing_3a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Artes Visuais' FROM artesvisuais_3a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Música' FROM musica_3a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Educação Física' FROM edf_3a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Dança' FROM danca_3a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Ciências Naturais' FROM cnaturais_3a WHERE nome_id=$id AND year=$ano";

    } elseif ($classe == "4a Classe") {
      $sql = "SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Português' FROM port_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Matemática' FROM mat_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Inglês' FROM ing_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Artes Visuais' FROM artesvisuais_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Música' FROM musica_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Educação Física' FROM edf_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Dança' FROM danca_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Ciências Naturais' FROM cnaturais_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Ciências Sociais' FROM csociais_4a WHERE nome_id=$id AND year=$ano";

    } else {
      $sql = "";
    }

    $response = mysqli_query($conn, $sql);
    if (mysqli_num_rows($response) > 0) {
      // success
      while ($row = mysqli_fetch_assoc($response)) {
        array_push($result['pn'], $row);
      }
      array_push($result['suc'], "104");

    } else {
      // error
      array_push($result['err'], "104");
    }

    # Retrieve the query result as JSON
    header('Content-Type: application/json'); // make sure it responds as json.
    echo json_encode($result);
    mysqli_close($conn);
}

?>
