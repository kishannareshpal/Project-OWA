<?php

  $id = $_GET['id'];
  $reponse = array();

  $conn = mysqli_connect("oneworldacademymz.com", "oneworv0_admin", "admin", "oneworv0_students") or die ('I cannot connect to the database.');

  $sql = "SELECT p.first_name, p.last_name, p.username, p.password FROM profiles as p WHERE p.id='".$id."'";
  $qe = mysqli_query($conn, $sql);

  // var_dump($row['prim_trim']);
  while($row = mysqli_fetch_assoc($qe)) {
    $reponse[] = $row;
  }
  echo json_encode($reponse);

  $qe->close();
  $conn->close();
?>
