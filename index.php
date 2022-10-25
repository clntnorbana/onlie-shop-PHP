<?php
include_once "includes/database.php";

$sql = "SELECT * FROM products";

$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<?php include "templates/header.php" ?>

<div class="container py-5">

  <?php
  if (isset($_SESSION['id'])) {
    echo '<p class="lead">Welcome ' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . ' (' . $_SESSION['username'] . ')</p>';
    echo '<hr>';
  } else {
    echo '<p class="lead">You must <a class="text-decoration-none" href="login.php">log in</a> first before adding items to cart.</p>';
    echo '<hr>';
  }
  ?>

  <p class="display-4 mb-4">Shop</p>
  <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(230px, 1fr)); grid-gap: 20px 20px;">

    <?php foreach ($products as $product) { ?>

      <form class="card shadow-sm" method="POST" action="cart.php?id=<?= $product['id'] ?>">
        <img class="img-fluid" style="height: 180px; object-fit: cover" src="images/<?= htmlspecialchars($product['product_img']) ?>" alt="<?= htmlspecialchars($product['product_name']) ?>">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <p class="lead"><?= htmlspecialchars($product['product_name']) ?></p>
            <p>&#8369;<?= number_format(htmlspecialchars($product['product_price']), 2) ?></p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <input type="hidden" name="product_name" value="<?= $product['product_name'] ?>">
            <input type="hidden" name="product_price" value="<?= $product['product_price'] ?>">
            <input type="number" name="quantity" value="1" min="1" max="10">
            <input class="btn btn-sm btn-dark" type="submit" name="add_to_cart" value="Add to cart">
          </div>
        </div>
      </form>

    <?php } ?>

  </div>
</div>

<?php include "templates/footer.php" ?>