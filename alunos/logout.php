<?php
// session_start();
// if(isset($_COOKIE['lu'])) // Destroying All Sessions
// {
  unset($_COOKIE['lu']);
  setcookie('lu', false, time() - 60*100000, "/", ".oneworldacademymz.com");

  header("Location: ../"); // Redirecting To Home Page
  // die();
// }

?>
