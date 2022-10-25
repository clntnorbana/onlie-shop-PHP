<?php
include_once "database.php";

if (isset($_POST['signup_submit'])) {
  $username = $_POST['username'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $password = $_POST['password'];
  if (empty($username) || empty($firstname) || empty($lastname) || empty($password)) {
    header("location: ../signup.php?error");
    exit();
  }

  $sql = "INSERT INTO users (username, password, lastname, firstname) VALUES ('$username', '$password', '$lastname', '$firstname');";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("location: ../signup.php?success");
    exit();
  }
}
