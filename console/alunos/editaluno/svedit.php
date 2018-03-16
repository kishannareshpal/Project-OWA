<?php
  # connect to the database
  $conn = mysqli_connect("oneworldacademymz.com", "oneworv0_admin", "admin", "oneworv0_students") or die ('I cannot connect to the database.');

  # Retrieve the vars from the post ajax.
  $id             = $_POST['id'];
  $first_name     = $_POST['first_name'];
  $last_name      = $_POST['last_name'];
  $username       = $_POST['username'];
  $bool_isToReset = $_POST['isToReset'];

  # reset password if necessary
  if ($bool_isToReset === "true") {
    $sql     = "UPDATE profiles SET password='no' WHERE id='".$id."'";
    mysqli_query($conn, $sql);
  };

  # Update the profiles
  $sql     = "UPDATE profiles SET first_name='".$first_name."', last_name='".$last_name."', username='".$username."' WHERE id='".$id."'";
  $red_sql = mysqli_query($conn, $sql);

  # Check request result:
  if (!$red_sql){
    # if anything failed
    echo "error";

  } else {
    # if everything went smoothly :P
    echo "done";
  }

  $conn->close();

?>
