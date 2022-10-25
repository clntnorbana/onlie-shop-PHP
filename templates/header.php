<?php
session_start();

$cart_count = isset($_SESSION['cart']) > 0 ? "(" . count($_SESSION['cart']) . ")" : "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <div class="container">
      <a class="navbar-brand" href="index.php">Fantastic 4 Shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Shop</a>
          </li>
          <?php
          if (isset($_SESSION['id'])) {
            echo '
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart' . $cart_count . '</a>
            </li>';

            echo '
            <li class="nav-item">
              <a class="nav-link" href="includes/logout.inc.php">Log out</a>
            </li>';
          } else {
            echo '
            <li class="nav-item ">
              <a class="nav-link" href="login.php">Login</a>
            </li>';

            echo '
            <li class="nav-item ">
              <a class="nav-link" href="signup.php">Sign up</a>
            </li>';

            echo '
            <li class="nav-item">  
              <a class="nav-link" href="accounts.php">Accounts</a>
            </li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>