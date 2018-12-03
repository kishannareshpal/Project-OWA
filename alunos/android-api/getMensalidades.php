<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {

    # essentials
    $id = $_POST['id'];
    $ano = $_POST['current_ano'];
    $result['pm'] = array(); // profile notas

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
    ## 1. Query the student's MENSALIDADES (Error Code: 104)
    $sql = "SELECT * FROM mensalidades WHERE id = $id AND payment_year=".$ano;
    $response = mysqli_query($conn, $sql);

    $response = mysqli_query($conn, $sql);
    if (mysqli_num_rows($response) > 0) {
      // success
      $row = mysqli_fetch_assoc($response);
      array_push($result['pm'], $row);
      array_push($result['suc'], "103");

    } else {
      // error
      array_push($result['err'], "103");
    }

    # Retrieve the query result as JSON
    header('Content-Type: application/json'); // make sure it responds as json.
    echo json_encode($result);
    mysqli_close($conn);
}

?>
