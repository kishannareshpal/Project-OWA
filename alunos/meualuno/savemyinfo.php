<?php
  # connect to the database
  $conn = mysqli_connect("oneworldacademymz.com", "oneworv0_admin", "admin", "oneworv0_students") or die ('I cannot connect to the database.');

  # Retrieve the vars from the post ajax.
  $id           = $_POST['id'];
  $first_name   = $_POST['first_name'];
  $last_name    = $_POST['last_name'];
  // $username     = $_POST['username'];

  $actualpass   = $_POST['actualpass'];
  $newpass      = $_POST['newpass'];
  $newpassagain = $_POST['newpassagain'];
  
  
  # Change the user's password if necessary
  if ($actualpass !== "") {
    // Get the pass from the database:
    $sql = "SELECT `password` FROM profiles WHERE id=$id LIMIT 1";
    $qe  = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($qe);
    $passfromdatabase = $row['password'];

    // formula to secure pass:
    $salted = "sdi09uj2krows".$actualpass;
    $hashed = hash('sha512', $salted); 

    // check if the old password matches with the one you typed now:
    if ($passfromdatabase === $hashed) {
      // if it matches, compare Your newly typed password:
      if(($newpass === $newpassagain) && ($newpass !== "") && ($newpassagain !== "")){
        // if the newly typed password matches:
          // secure it (hash it):
          $salted = "sdi09uj2krows".$newpass;
          $hashed = hash('sha512', $salted); 
        
        // now change the password in the database
        $query = "UPDATE profiles SET `password`='".$hashed."' WHERE id=$id";
        $qe    = mysqli_query($conn, $query);

        if(!$qe){        
          echo "CHANGEDERROR"; // password changing stuck on a problem. don't really know what caused the problem though, but i'm sure it has to do with the server (maybe overload)
        } else {
          echo "CHANGED"; // successfully changed the password. Use this next time the user logins's
        }
      
      } else {
        echo "NOMATCH"; // newly typed password doesn't match   
        
      }
      
    } else {
      echo "INVALID"; // invalid old password.
    }
  }


  # Update the profiles
  $sql     = "UPDATE profiles SET first_name='".$first_name."', last_name='".$last_name."' WHERE id='".$id."'";
  $red_sql = mysqli_query($conn, $sql);

  # Check request result:
  if (!$red_sql){
    // if failed
    echo "PROFILEERROR";

  } else {
    // if everything went smoothly :P
    // echo "PROFILESUCCESS";
  }

  $conn->close();

?>
