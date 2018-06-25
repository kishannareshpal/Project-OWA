<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $salted = "sdi09uj2krows".$password;
    $password = hash('sha512', $salted);


    // $db_host = "upmaxixe.ac.mz";
    // $db_username = "upmaxixe";
    // $db_password = "uPM@kxiX3.,2016";
    // $db_database = "upmaxixe";

    $db_host = "localhost";
    $db_username = "oneworv0_admin";
    $db_password = "admin";
    $db_database = "oneworv0_students";

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_database);

    // $sql = "SELECT * FROM wp_st WHERE username='$username'"; // -> UP
    $sql = "SELECT * FROM profiles WHERE username='$username'"; // -> One World Academy

    $response = mysqli_query($conn, $sql);

    $result = array();
    $result['login'] = array();

    if ( mysqli_num_rows($response) === 1 ) {

        $row = mysqli_fetch_assoc($response);

        if ($password == $row['password']) {

            // $index['id'] = $row['id'];
            // $index['grade'] = $row['grade'];
            // $index['username'] = $row['username'];
            // $index['password'] = $row['password'];

            array_push($result['login'], $row);

            $result['success'] = "1";
            $result['message'] = "success";
            echo json_encode($result);

            mysqli_close($conn);

        } else {

            $result['success'] = "0";
            $result['message'] = "error";
            echo json_encode($result);

            mysqli_close($conn);
        }

    }

}

?>
