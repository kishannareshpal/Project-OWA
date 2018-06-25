<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $id = $_POST['id'];
    $ano = $_POST['current_ano'];
    $classe = $_POST['current_classe'];

    $db_host = "localhost";
    $db_username = "oneworv0_admin";
    $db_password = "admin";
    $db_database = "oneworv0_students";

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_database);

    if ($classe == "1a Classe") {
      $sql = "SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Português' FROM port_1a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Matemática' FROM mat_1a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Inglês' FROM ing_1a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Artes Visuais' FROM artesvisuais_1a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Música' FROM musica_1a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Educação Física' FROM edf_1a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Dança' FROM danca_1a WHERE nome_id=$id AND year=$ano";

    } elseif ($classe == "2a Classe") {
      $sql = "SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Português' FROM port_2a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Matemática' FROM mat_2a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Inglês' FROM ing_2a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Artes Visuais' FROM artesvisuais_2a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Música' FROM musica_2a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Educação Física' FROM edf_2a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Dança' FROM danca_2a WHERE nome_id=$id AND year=$ano";

    } elseif ($classe == "3a Classe") {
      $sql = "SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Português' FROM port_3a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Matemática' FROM mat_3a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Inglês' FROM ing_3a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Artes Visuais' FROM artesvisuais_3a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Música' FROM musica_3a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Educação Física' FROM edf_3a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Dança' FROM danca_3a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Ciências Naturais' FROM cnaturais_3a WHERE nome_id=$id AND year=$ano";

    } elseif ($classe == "4a Classe") {
      $sql = "SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Português' FROM port_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Matemática' FROM mat_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Inglês' FROM ing_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Artes Visuais' FROM artesvisuais_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Música' FROM musica_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Educação Física' FROM edf_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Dança' FROM danca_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Ciências Naturais' FROM cnaturais_4a WHERE nome_id=$id AND year=$ano UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Ciências Sociais' FROM csociais_4a WHERE nome_id=$id AND year=$ano";

    }

    $response = mysqli_query($conn, $sql);
    $result = array();
    $result['profile_notas'] = array();

    if ( mysqli_num_rows($response) > 0 ) {

        while ($row = mysqli_fetch_assoc($response)) {
          array_push($result['profile_notas'], $row);
        }

        // keeping response header to json
        header('Content-Type: application/json');

        $result['success'] = "1";
        $result['message'] = "success";
        echo json_encode($result);
        mysqli_close($conn);

    } else {
      $result['success'] = "0";
      $result['message'] = "Falha no pedido dos detalhes [notas] do aluno. Tente mais tarde.";

      // keeping response header to json
      header('Content-Type: application/json');


      echo json_encode($result);
      mysqli_close($conn);
    }
}

?>
