<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

  </head>

  <body>

    <?php require 'partials/header.php' ?>

    <h1>Login</h1>
    <span>or <a href="singup">SingUp</a></span>

    <form action="index.php" method="post">
      <input type="text" name="email" placeholder="Enter your Email">
      <input type="password" name="Password" placeholder="Enter your Password">
      <input type="submit" value="Send">
    </form>

    </form>

    <style>
      div {
        height: 40px;
        width: 70%;
        background: black;
        margin: 50px auto;
        border-radius: 5px;
        position: relative;
      }

      #rect {
        animation-name: rainbow;
        animation-duration: 4s;
      }

      @keyframes rainbow {
        0% {
          background-color: blue;
          top: 0px;

        }
        50% {
          background-color: green;
          top: 50px;

        }
        100% {
          background-color: yellow;
          top: 0px;

        }
      }
    </style>
  </body>
</html>
