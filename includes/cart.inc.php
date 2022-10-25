<?php
ob_start();
include_once "../cart.php";

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'clear_cart') {
    unset($_SESSION['cart']);
  }

  if ($_GET['action'] == 'remove_item') {
    foreach ($_SESSION['cart'] as $key => $value) {
      if ($value['id'] == $_GET['id']) {
        unset($_SESSION['cart'][$key]);
      }
    }
  }

  header('location: ../cart.php');
  ob_end_flush();
}
