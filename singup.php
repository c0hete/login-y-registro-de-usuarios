<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SingUP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

  <h1>SignUp</h1>
  <span>or <a href="login.php">Login</a></span>
  <form action="index.php" method="post">
    <input type="text" name="email" placeholder="Enter your Email">
    <input type="password" name="Password" placeholder="Enter your Password">
    <input type="submit" value="Send">
  </form>
  </body>
</html>
