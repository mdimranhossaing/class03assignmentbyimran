<?php 

  session_start();
  session_destroy();
  setcookie( 'user', $username, time() - (86400 * 30) );
  setcookie( 'pass', $password, time() - (86400 * 30) );

  header( 'location: index.php' );

?>