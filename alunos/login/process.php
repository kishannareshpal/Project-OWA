<?php
// include('../required/php/messages.php');

session_start(); // Starting Session
// $error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
  if (empty($_POST['username']) || empty($_POST['password'])) {

    $error = "*Por favor preencha os espaços vazios.";

  } else {
    // Define $username and $password
    $username = $_POST['username'];
    $password = $_POST['password'];

    # Salt and Hash the $password
    $salted = "sdi09uj2krows".$password;
    $hashed = hash('sha512', $salted);

    // mysqli_connect() function opens a new connection to the MySQL server.
    // $conn = mysqli_connect('127.0.0.1', "root", "", "database1");
    $conn = mysqli_connect("oneworldacademymz.com", "oneworv0_admin", "admin", "oneworv0_students") or die ('I cannot connect to the database.');
    // SQL query to fetch information of registerd users and finds user match.
    $query = "SELECT username, password FROM profiles WHERE username=? AND password=?";

    // To protect MySQL injection for Security purpose
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $hashed);
    $stmt->execute();
    $stmt->bind_result($username, $hashed);
    $stmt->store_result();

    if($stmt->fetch()) {
      #fetching the contents of the row

      // if ($username == "oneworldacademy") {
      //   # code...
      //   // $_COOKIE['lu'] = $username; # Initializing Session
      //   header("location: ../console/"); # Redirecting To Profile Page
      // }

      setcookie('lu', $username, time()+220898482, "/", "oneworldacademymz.com"); # Creating a Cookie for 7 years
      // setcookie('lu', $username, time()+220898482, "/"); # Creating a Cookie for 7 years
      // $_COOKIE['lu'] = ;
      header("location: ../meualuno/"); # Redirecting To Profile Page

    } else {
      // $sql = "SELECT username FROM students WHERE username LIKE '%$username%' LIMIT 1";
      // $res_like = mysqli_query($conn, $sql);
      //
      // if (mysqli_num_rows($res_like) > 0) {
      //   $row = mysqli_fetch_assoc($res_like);
      //   $didyoumean = "Did you mean ".$row['username']." ?";
      // }
      // $error = "Username or Password is invalid";
      $error = "O Username ou a senha está incorreto(a)";
    }
    mysqli_close($conn); # Closing Connection
  }
}
?>
