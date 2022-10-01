<?php

  require_once( 'database.php' );
  require_once( 'functions.php' );

  session_start();

  if ( user_logged_in() ) {
    echo "cookie added <br>";
    echo "session added";
    header( 'location: admin.php' );
  }

  $s_user = isset ( $_SESSION['username'] );
  $s_pass = isset ( $_SESSION['password'] );

  if ( $s_user === USERNAME && $s_pass === PASSWORD ) {
    echo "session added";
    header( 'location: admin.php' );
  }

  if ( isset( $_POST['user-login'] ) ) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ( $username === USERNAME && $password === PASSWORD ) {
      
      if ( isset( $_POST['keep'] ) ) {
        setcookie( 'user', $username, time() + 60*60*24*30 );
        setcookie( 'pass', $password, time() + 60*60*24*30 );
      }

      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      $_SESSION['success'] = ' ';
      header( 'location: admin.php' );

    } else {
      $message = 'Username or Password is Invalid.';
    }
  }

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login panel</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- HEADER SECTION -->
    <header class="header-section">
      <nav class="navigation-menu">
        <div class="container">
          <div class="userinfo">
            <p><b>Username: </b>mdimran<span> | </span> <b>Password: </b>1234</p>
          </div>
          <ul>
            <li class="active"><a href="index.php">login</a></li>
            <li><a href="admin.php">admin panel</a></li>
            <li><a href="logout.php">logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- USER LOGIN SECTION -->
    <section class="user-login content">
      <div class="container">
        <h2 class="title">User Login</h2>
        <span class="message"><?php if ( isset( $message ) ) { echo $message; } ?></span>
        <form action="" method="POST">

          <label for="username">your username <span>*</span></label>
          <input type="text" name="username" id="username" placeholder="enter your username" required="require">

          <label for="password">your password <span>*</span></label>
          <input type="password" name="password" id="password" placeholder="enter your password" required="require">

          
          <label class="keep"><input type="checkbox" name="keep">Keep me logged in</label>

          <input type="reset" name="reset" value="reset">
          <input type="submit" name="user-login" value="login">

        </form>
      </div>
    </section>

    <!-- FOOTER SECTION -->
    <footer class="footer-section">
      <div class="copyright">
        <p>&copy; 2022 all right reserved by md imran hossain</p>
      </div>
    </footer>
  </body>
</html>