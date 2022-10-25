<?php

include_once "database.php";

if (isset($_POST['login_submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    header("location: ../login.php?error=empty");
    exit();
  }

  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['username'] === $username && $row['password'] === $password) {
      session_start();

      $_SESSION['id'] = $row['id'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['lastname'] = $row['lastname'];
      $_SESSION['firstname'] = $row['firstname'];

      echo $_SESSION['username'];

      header("location: ../index.php");
      exit();
    }
  } else {
    header("location: ../login.php?error=incorrect");
    exit();
  }
}
