<?php

  $conn = mysqli_connect("oneworldacademymz.com", "oneworv0_admin", "admin", "oneworv0_students") or die ('I cannot connect to the database.');

  $coll=$_POST['col'];
  $idd=$_POST['id'];
  $vall=$_POST['val'];
  $sc=$_POST['sc'];
  $sa=$_POST['sa'];

  // echo "$idd" + $idd + "<br>";
  // echo "$vall" + $vall + "<br>";
  // echo "$sc " + $sc + "<br>";
  // echo "$sd " + $sd + "<br>";
  // echo "$coll" + $coll + "<br>";

  $sql = mysqli_query($conn, "UPDATE ".'medias_'.$sc." SET $coll=$vall WHERE identity=$idd");

  if (!$sql) {
    # code...
    echo "error".mysqli_error($conn);

  } else {
    # code...
    echo "done";
  }

?>
