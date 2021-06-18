<?php

 require_once 'controller/functions/indexController.php';
  require_once 'controller/login/routesRols.php';
 authRols();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="media/animal-2028258_1280.png" type="image/x-icon">
    <link rel="stylesheet" href="library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="library/sweetAlert/sweetalert2.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
   

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="media/animal-2028258_1280.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form >
      <input type="email" id="email" class="fadeIn second" name="login" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="password">
    </form>
    <input type="submit" class="fadeIn fourth" id="btn-enviar" onclick="login()" value="Log In">

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>

   <script src="library/bootstrap/js/bootstrap.min.js"></script>
   <script src="library/jquery-3.6.0.min.js"></script>
   <script src="library/sweetAlert/sweetalert2.min.js"></script>
   <script src="js/index.js"></script>
</body>
</html>