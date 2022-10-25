<?php include "templates/header.php" ?>

<div class="container py-5 d-flex flex-column justify-content-center align-items-center">

  <?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] === "empty") {
      echo "<p class='alert alert-warning col-lg-6 border-danger'>Fill in all fields.</p>";
    }

    if ($_GET['error'] === "incorrect") {
      echo "<p class='alert alert-warning col-lg-6 border-danger'>Username or Password is incorrect.</p>";
    }
  }
  ?>

  <?php
  if (isset($_GET['action'])) {
    if ($_GET['action'] === "denied") {
      echo "<p class='alert alert-warning col-lg-6 border-danger'>Log in so you can add items to cart :).</p>";
    }
  }
  ?>
  <form class="col-lg-6 shadow-lg p-4" method="post" action="includes/login.inc.php">
    <p class="text-muted">Quick login: type 'user' for both username and password</p>
    <p class="fs-2">Log in</p>
    <div class="mb-3">
      <input type="text" name="username" class="form-control" placeholder="Username">
    </div>
    <div class="mb-3">
      <input type="password" name="password" class="form-control" placeholder="Password">
    </div>
    <button type="submit" name="login_submit" class="btn btn-success form-control">Login</button>
    <div class="d-flex flex-column align-items-center justify-content-center mt-3">
      <a class="text-decoration-none" href="signup.php">Sign up?</a>
    </div>
  </form>
</div>

<?php include "templates/footer.php" ?>