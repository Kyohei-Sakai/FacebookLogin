<?php

require_once(__DIR__ . '/config.php');

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Facebok Login</title>
    <style>
      #container {
        width: 500px;
        margin: 0 auto;
      }
      #login {
        text-align: center;
        margin: 70px auto;
      }
      .btn {
        background: #3b5998;
        color: #fff;
        width: 200px;
        padding: 5px;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
      }
      .btn:hover {
        opacity: 0.8;
      }
      </hgroup>
    </style>
</head>
<body>
  <div id="container">

    <div id="login">
      <a href="login.php" class="btn">Facebook Login</a>
    </div>

  </div>
</body>
</html>
