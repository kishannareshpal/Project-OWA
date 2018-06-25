<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $id = $_POST['id'];

    $db_host = "oneworldacademymz.com";
    $db_username = "oneworv0_admin";
    $db_password = "admin";
    $db_database = "oneworv0_students";

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_database);
    $sql_red = "SELECT year, '1a Classe' as 'classe' FROM port_1a WHERE nome_id=$id UNION ALL SELECT year, '2a Classe' FROM port_2a WHERE nome_id=$id UNION ALL SELECT year, '3a Classe' FROM port_3a WHERE nome_id=$id UNION ALL SELECT year, '4a Classe' FROM port_4a WHERE nome_id=$id";

    $result = array();
    $result['frequented_years'] = array();

    $response = mysqli_query($conn, $sql_red);


    if (mysqli_num_rows($response) > 0) {

        while ($row_red = mysqli_fetch_assoc($response)) {
          array_push($result['frequented_years'], $row_red);
        }

        $result['success'] = "1";
        $result['message'] = "success";

        // keeping response header to json
        header('Content-Type: application/json');

        echo json_encode($result);
        mysqli_close($conn);

    } else {
      $result['success'] = "0";
      $result['message'] = "Falha no pedido dos detalhes do aluno. Tente mais tarde.";
      echo json_encode($result);
      mysqli_close($conn);
    }
}

?>
