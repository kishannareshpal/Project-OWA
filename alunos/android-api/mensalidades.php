<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $id = $_POST['id'];
    $ano = $_POST['current_ano'];

    $db_host = "localhost";
    $db_username = "oneworv0_admin";
    $db_password = "admin";
    $db_database = "oneworv0_students";

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_database);
    $sql = "SELECT * FROM mensalidades WHERE id = $id AND payment_year=".$ano;
    $response = mysqli_query($conn, $sql);
    $result = array();
    $result['profile_mensalidades'] = array();

    if ( mysqli_num_rows($response) > 0 ) {
        $row = mysqli_fetch_assoc($response);
        array_push($result['profile_mensalidades'], $row);

        $result['success'] = "1";
        $result['message'] = "success";
        echo json_encode($result);
        mysqli_close($conn);

    } else {
      $result['success'] = "0";
      $result['message'] = "Falha no pedido dos detalhes [mensalidade] do aluno. Tente mais tarde.";
      echo json_encode($result);
      mysqli_close($conn);
    }
}

?>
