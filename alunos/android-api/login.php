<?php

// if ($_SERVER['REQUEST_METHOD']=='POST') {


    # essentials
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    $username = "antonioj2018";
    $password = "123";


    $result = array();
    $result['up'] = array(); // User Profile Details

    $result['suc'] = array(); // success report
    $result['err'] = array(); // error report

    # hash the password
    $salted = "sdi09uj2krows".$password;
    $password = hash('sha512', $salted);

    # Now make a connection to the database – UP SERVER:
    $db_host = "www.upmaxixe.ac.mz"; // database host
    $db_username = "upmaxixe"; // database username
    $db_password = "uPM@kxiX3.,2016"; // database password
    $db_database = "upmaxixe"; // database name

    // # Now make a connection to the database:
    // $db_host = "oneworldacademymz.com"; // database host
    // $db_username = "oneworv0_admin"; // database username
    // $db_password = "admin"; // database password
    // $db_database = "oneworv0_students"; // database name

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_database) or die("fuck!"); // estabilish a connection now

    # Start the querying...
    ## 1. Query the student's USER's PROFILE for LOGIN (Error Code: 100)
    // $sql = "SELECT * FROM wp_st WHERE username='$username'"; // -> UP SERVER
    $sql = "SELECT * FROM profiles WHERE username='$username'"; // -> One World Academy
    $response = mysqli_query($conn, $sql);



    if (mysqli_num_rows($response) == 1) {
        $row = mysqli_fetch_assoc($response);

        if ($password == $row['password']) {
            // success
            array_push($result['up'], $row);
            array_push($result['suc'], "100");

        } else {
            // error
            array_push($result['err'], "100");
        }
    }


    # Retrieve the query result as JSON
    header('Content-Type: application/json'); // make sure it responds as json.
    echo json_encode($result);
    mysqli_close($conn);

// }

?>
