<?php
session_start();

    $_SESSION;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UniConnect</title>
    <link rel="stylesheet" href="style.css">
    <script
      src="https://kit.fontawesome.com/a2c690eb5b.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <h1>Welcome To Uniconnect</h1>
    <div class="nav-bar">
      <a href="signup.php" class="Reg">Register</a>
      <a href="loginreal.php" class="Log">login</a>
      <!-- Aparna -->
    </div>
    <div class="notice-board">
      <div class="rect-box-main"></div>
      <div class="side-box-a"></div>
      <div class="side-box-b"></div>
      <!-- <div class="arrow-right">
        <img src="/assets/left arrow.png" alt="left arrow">
      </div> -->
      <!-- Laks + Lana -->
    </div>
    <div class="events" id="even">
      <!-- Akanks -->
    </div>
    <div class="calendar"></div>
    <div class="map"></div>
  </body>
</html>
