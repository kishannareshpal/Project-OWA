<?php

  $conn = mysqli_connect("oneworldacademymz.com", "oneworv0_admin", "admin", "oneworv0_students") or die ('I cannot connect to the database.');
  $ssyear=$_POST['syear'];

  // $value=$_POST['value'];
  // $theID=$_POST['theID'];
  // $field=$_POST['field'];

  // $sql= mysqli_query($conn, "UPDATE artesvisuais_1a SET primeiroTrim=$value");



  $sql = "SELECT CONCAT(p.first_name, ' ', p.last_name) as fullname, m.* FROM mensalidades as m, profiles as p WHERE m.id=p.id AND m.payment_year=$ssyear";
  // var_dump($sql);

  // SELECT profiles.username, prim_trim, seg_trim, ter_trim notafinal FROM musica_2a as disciplina INNER JOIN profiles ON disciplina.nome_id=profiles.id
  // $sql = "SELECT * FROM educacaofisica_4a";
  $qer = mysqli_query($conn, $sql);

  $data = array();
  if ($qer) {
    while($row = mysqli_fetch_assoc($qer)) {
      $data[] = $row;
    }
  }


  echo json_encode(array('data' => $data));
  $qer->close();
  $conn->close();
