<?php include "templates/header.php" ?>

<?php
if (isset($_SESSION['id'])) {
  if (isset($_POST['add_to_cart'])) {

    if (isset($_SESSION['cart'])) {

      $session_array_id = array_column($_SESSION['cart'], "id");

      if (!in_array($_GET['id'], $session_array_id)) {
        $session_array = array(
          "id" => $_GET['id'],
          "name" => $_POST['product_name'],
          "price" => $_POST['product_price'],
          "quantity" => $_POST['quantity']
        );
        $_SESSION['cart'][] = $session_array;
      }
    } else {
      $session_array = array(
        "id" => $_GET['id'],
        "name" => $_POST['product_name'],
        "price" => $_POST['product_price'],
        "quantity" => $_POST['quantity']
      );

      $_SESSION['cart'][] = $session_array;
    }

    header("location: cart.php?added");
  }
} else {
  header("location: login.php?action=denied");
  exit();
}
?>

<div class="container py-5">
  <div class='d-flex justify-content-between align-items-center'>
    <?php
    if (isset($_SESSION['id'])) {
      echo "<p class='lead'> " . $_SESSION['firstname'] . " " . $_SESSION['lastname'] . "'s cart</p>";
    }
    ?>
    <?php
    if (isset($_SESSION['cart'])) {
      if ($_SESSION['cart'] > 0) {
        echo "
        <button class='btn btn-danger'>
          <a class='text-decoration-none text-white' href='includes/cart.inc.php?action=clear_cart'>Clear Cart</a>
        </button>";
      }
    }
    ?>
  </div>

  <hr>

  <p class="display-4 mb-4">Cart</p>

  <div>
    <?php if (!empty($_SESSION['cart'])) {
      $total = 0;
    ?>
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($_SESSION['cart'] as $key => $value) {
            $single_product_total = $value['price'] * $value['quantity'];
            $total += $value['price'] * $value['quantity'];
          ?>
            <tr>
              <td><?= $value['name'] ?></td>
              <td>&#8369;<?= number_format($value['price'], 2) ?></td>
              <td><?= $value['quantity'] ?></td>
              <td>&#8369;<?= number_format($single_product_total, 2) ?></td>
              <td>
                <button class="btn btn-sm">
                  <a class="text-decoration-none" style="color: red;" href="includes/cart.inc.php?action=remove_item&id=<?= $value['id'] ?>">Remove</a>
                </button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

      <h5 class="alert alert-dark">You have <?= count($_SESSION['cart']) ?> cart item/s, total of &#8369;<?= number_format($total, 2) ?></h5>

    <?php } else { ?>
      <h3 class="text-center mt-5">Your cart is empty, go to <a class="text-decoration-none" href="index.php">shop</a>.</h3>
    <?php } ?>
  </div>

</div>

<?php include "templates/footer.php" ?>