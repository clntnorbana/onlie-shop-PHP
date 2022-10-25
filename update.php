<?php
include_once "includes/database.php";

$user = "";
$username = "";
$firstname = "";
$lastname = "";

if (isset($_GET['user'])) {
  $user = $_GET['user'];

  $sql = "SELECT * FROM users WHERE username='$user'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  mysqli_close($conn);

  $username = $row['username'];
  $firstname = $row['firstname'];
  $lastname = $row['lastname'];
}

if (isset($_POST['update_submit'])) {
  $user = $_POST['user'];
  $username = $_POST['username'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];

  if (empty($username) || empty($firstname) || empty($lastname)) {
    header("location: update.php?empty");
    exit();
  }

  $sql = "UPDATE users SET username='$username', firstname='$firstname', lastname='$lastname' WHERE username='$user'";
  if (mysqli_query($conn, $sql)) {
    header(("location: accounts.php?success"));
    exit();
  }
}

?>
<?php include "templates/header.php" ?>

<div class="container py-5">
  <?php
  if (isset($_GET['empty'])) {
    echo "<p class='alert alert-warning border-warning'>Fill in all fields.</p>";
  }
  ?>
  <form action="update.php" method="post">
    <input name="user" type="hidden" value="<?= $user ?>">
    <p class="fs-2">Update</p>
    <hr>
    <input class="form-control mb-2" type="text" value="<?= $username ?>" name="username" placeholder="Username">
    <input class="form-control mb-2" type="text" value="<?= $firstname ?>" name="firstname" placeholder="First Name">
    <input class="form-control mb-2" type="text" value="<?= $lastname ?>" name="lastname" placeholder="Last Name">
    <div>
      <button class="btn btn-primary" name="update_submit">Update</button>
      <a href="accounts.php" class="btn btn-secondary" name="update_submit">Go back</a>
    </div>
  </form>
</div>

<?php include "templates/footer.php" ?>