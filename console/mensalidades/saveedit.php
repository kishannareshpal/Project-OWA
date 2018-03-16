<?php

  $conn = mysqli_connect("oneworldacademymz.com", "oneworv0_admin", "admin", "oneworv0_students") or die ('I cannot connect to the database.');

  $fullname=$_POST['fullname'];
  $syear=$_POST['syear'];
  $smes = $_POST['smes'];
  $vall = $_POST['vall'];



  // $disc = $sd.$sc;

  // echo "$idd" + $idd + "<br>";
  // echo "$vall" + $vall + "<br>";
  // echo "$sc " + $sc + "<br>";
  // echo "$sd " + $sd + "<br>";
  // echo "$coll" + $coll + "<br>";

  // get the id
  $sql = "SELECT m.id FROM mensalidades as m, profiles as p WHERE (CONCAT(p.first_name,' ', p.last_name)='$fullname') AND m.payment_year='$syear' AND m.id=p.id";
  $qe = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($qe);
  $idd = $row['id'];


  $sql = "UPDATE mensalidades SET ".strtolower($smes)."='$vall' WHERE id=$idd";
  $red_sql = mysqli_query($conn, $sql);

  if (!$red_sql) {
    echo "error";

  } else {
    echo "done";
  }

  $red_sql->close();
  $conn->close();

?>
