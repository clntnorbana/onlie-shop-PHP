<?php
include_once "includes/database.php";

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<?php include "templates/header.php" ?>

<div class="container py-5">

  <?php
  if (isset($_GET['success'])) {
    echo '<p class="alert alert-success border-success">Data updated</p>';
  }
  ?>

  <div class="d-flex align-items-center justify-content-between">
    <p class="fs-2">List of Users</p>
    <p class="fs-5">Go to<a class="text-decoration-none" href="signup.php"> sign up </a>to add a user.</p>
  </div>

  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($users as $user) { ?>
        <tr>
          <td><?= $user['username'] ?></td>
          <td><?= $user['firstname'] ?></td>
          <td><?= $user['lastname'] ?></td>
          <td>
            <button class="btn btn-sm">
              <a class="text-decoration-none" style="color: blue;" href="update.php?user=<?= $user['username'] ?>">Update</a>
            </button>
          </td>
        </tr>
      <?php } ?>

    </tbody>
  </table>
</div>

<?php include "templates/footer.php" ?>