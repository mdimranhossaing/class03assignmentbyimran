<?php

  if (isset($_REQUEST['submit'])) {

    $city = $_REQUEST['city'];

    switch ($city) {
      case "Dhaka":
        $city = "{$city} is a beutiful city on Bangladesh!";
        break;
      case "Kushtia":
        $city = "{$city} is the cultural capital of Bangladesh.";
        break;
      case "Khulna":
        $city = "{$city} is one of the oldest and busiest river ports in Bangladesh.";
        break;
      default:
        $city = "You not select currect value!";
    }
  }

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Switch | Md Imran Hossain</title>
  </head>
  <body>
    <form style="margin-bottom: 30px;" action="" method="POST">
      <label for="city">Select a City</label>
      <select name="city" id="city">
        <option value="Dhaka">Dhaka</option>
        <option value="Kushtia">Kushtia</option>
        <option value="Khulna">Khulna</option>
      </select>
      <input type="submit" name="submit" value="Submit">
    </form>
    <h2><?php if (isset($city)) {echo $city; } ?></h2>
  </body>
</html>