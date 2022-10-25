<?php include "templates/header.php" ?>

<div class="container py-5 d-flex flex-column justify-content-center align-items-center">

  <?php
  if (isset($_GET['error'])) {
    echo "<p class='alert alert-warning col-lg-6 border-danger'>Fill in all fields.</p>";
  }

  if (isset($_GET['success'])) {
    echo "<p class='alert alert-success col-lg-6 border-success'>You signed up, information has beed recorded. Go to <a href='login.php'>login</a> or <a href='accounts.php'>accounts</a></p>";
  }
  ?>

  <form class="col-lg-6 shadow-lg p-4" method="post" action="includes/signup.inc.php">
    <p class="fs-2">Sign up</p>
    <div class="mb-3">
      <input type="text" name="username" class="form-control" placeholder="Username">
    </div>
    <div class="mb-3">
      <input type="text" name="firstname" class="form-control" placeholder="First Name">
    </div>
    <div class="mb-3">
      <input type="text" name="lastname" class="form-control" placeholder="Last Name">
    </div>
    <div class="mb-3">
      <input type="password" name="password" class="form-control" placeholder="Create Password (remember your password)">
    </div>
    <button type="submit" name="signup_submit" class="btn btn-success form-control">Sign up</button>
    <div class="d-flex flex-column align-items-center justify-content-center mt-3">
      <a class="text-decoration-none" href="login.php">Sign in?</a>
    </div>
  </form>

</div>

<?php include "templates/footer.php" ?>