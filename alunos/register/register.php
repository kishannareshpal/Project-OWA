<?php


// session_start(); # Starting Session
// $error_reg = ''; # Variable To Store Error Message

if (isset($_POST['submit_reg'])) {
  # Retrieve values
  $username = $_POST['regusername'];
  $password = $_POST['regpassword'];
  $passwordconfirm = $_POST['regpassword_confirm'];

  $conn = mysqli_connect('oneworldacademymz.com', "oneworv0_admin", "admin", "oneworv0_students");

  if (empty($username) || empty($password) || empty($passwordconfirm)) {
      # Check for empty fields
      $error_reg = "*Por favor preencha os espaços vazios.";
      return;

  } else if (!($password === $passwordconfirm)) {
      # Check if both password match
      $error_reg = "As senhas digitadas não são iguais.";
      return;
  }

  # SQL query to fetch information of registerd users and find user match.
  $sql = "SELECT username FROM profiles WHERE username=? AND password='no' LIMIT 1";

  # To protect MySQL against injection (Security purpose)
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $stmt->bind_result($username);
  $stmt->store_result();

  if ($stmt->fetch()) {

    # Salt and Hash the $password
    $salted = "sdi09uj2krows" . $password;
    $hashed = hash('sha512', $salted);

    $query = "UPDATE profiles SET password=? WHERE username=?";

    // $query = "INSERT INTO profiles (password) VALUES (?)";

    # To protect MySQL against injection (Security purpose)
    // "Prepare" the query using mysqli->prepare(query) -- which is the equivalent of mysql_real_escape_string -- in other words, it's the SAFE database injection method
    $stmt1 = $conn->prepare($query);
    // "Bind_param" == replace all the "?"'s in the aforementioned query with the variables below
    $stmt1->bind_param('ss', $hashed, $username);
    $stmt1->execute();
    // $stmt1->bind_result($first_name, $last_name, $username, $hashed);
    // $stmt1->store_result();

    if(!$stmt1->fetch()){
      $success = "Registado com Sucesso!";
      // header("location: ../alunos/login.php");

    } else {
      # code...
      $error_reg = "Algum erro encontrado ao registar o aluno. Por favor contacte-nos.";
    }
    // header("location: ../alunos/login.php");

  } else {
    $error_reg = "Operação não permitida para este nome de usuário!";

  }

  mysqli_close($conn); // Closing Connection

}

?>
