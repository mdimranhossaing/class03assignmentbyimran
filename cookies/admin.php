<?php 

  require_once( 'functions.php' );
  session_start();

  isset ( $_SESSION['username'] ) ? $username = $_SESSION['username'] : $username = NULL;
  isset ( $_SESSION['password'] ) ? $password = $_SESSION['password'] : $password = NULL;

  if ( ! user_logged_in() ) {
    header( 'location: index.php' );
  }
  else {
    $welcome = 'Welcome our Admin panel';
  }

  if ( isset ( $_COOKIE['user'] ) && isset ( $_COOKIE['pass'] ) ) {
    $csa = "Cookie & Session added";
    $username = $_COOKIE['user'];
    $password = $_COOKIE['pass'];
  }
  elseif ( isset ( $_SESSION['username'] ) && isset ( $_SESSION['password'] ) ) {
    $sa = "Session added";
  }
  
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- HEADER SECTION -->
    <header class="header-section">
      <nav class="navigation-menu">
        <div class="container">
          <div class="userinfo">
            <p><?php 
              if( isset ( $csa ) ) {
                echo $csa;
              }
              elseif ( isset ( $sa ) ) {
                echo $sa;
              }
             ?></p>
          </div>
          <ul>
            <li><a href="index.php">login</a></li>
            <li class="active"><a href="admin.php">admin panel</a></li>
            <li><a href="logout.php">logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- USER INFO SECTION -->
    <section class="user-info content">
      <div class="container">
        <h2 class="title">user information</h2>
        <table>

          <thead>
            <tr>
              <th>ID</th>
              <th>username</th>
              <th>password</th>
            </tr>
          </thead>

          <tbody>

            <tr>
              <td>01</td>
              <td><?php echo $username; ?></td>
              <td><?php echo $password; ?></td>
            </tr>

            <tr>
              <td>02</td>
              <td> </td>
              <td> </td>
            </tr>

            <tr>
              <td>03</td>
              <td> </td>
              <td> </td>
            </tr>

            <tr>
              <td>04</td>
              <td> </td>
              <td> </td>
            </tr>

            <tr>
              <td>05</td>
              <td> </td>
              <td> </td>
            </tr>
            
          </tbody>
        </table>
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