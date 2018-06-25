<?php

// if ($_SERVER['REQUEST_METHOD']=='POST') {

    $id = 2;

    $db_host = "oneworldacademymz.com";
    $db_username = "oneworv0_admin";
    $db_password = "admin";
    $db_database = "oneworv0_students";

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_database);
    $sql = "SELECT * FROM profiles as p WHERE p.id='".$id."'";
    $response = mysqli_query($conn, $sql);

    $result = array();
    $result['profile_details'] = array();


    if ( mysqli_num_rows($response) > 0 ) {

        $row = mysqli_fetch_assoc($response);
        array_push($result['profile_details'], $row);

        $result['success'] = "1";
        $result['message'] = "success";

        // keeping response header to json
        header('Content-Type: application/json');

        echo json_encode($result);
        mysqli_close($conn);

    } else {
      $result['success'] = "0";
      $result['message'] = "Falha no pedido dos detalhes do aluno. Tente mais tarde.";

      // keeping response header to json
      header('Content-Type: application/json');

      echo json_encode($result);
      mysqli_close($conn);
    }
// }

?>
