<?php 

  function user_logged_in () {
    if ( isset ( $_SESSION['success'] ) || isset ( $_COOKIE['user'] ) && isset ( $_COOKIE['pass'] ) ) {
      return true;
    }
    else {
      return false;
    }
  }

?>