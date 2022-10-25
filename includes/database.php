<?php

// change and use the username and password of your mysql database
$user = "root";
$password = "";

$localhost = "localhost";
$database = "online_shopping";

// $sql = "CREATE DATABASE online_shopping";
// if (mysqli_query(mysqli_connect($localhost, $user, $password), $sql)) {
//   echo "Database created";
//   echo "<br>";
// } else {
//   echo "Error";
// }

$conn = mysqli_connect($localhost, $user, $password, $database);
// echo ($conn ? 'Server fantastic4 connected successfully' : 'Error: ' . mysqli_connect_error($conn));    

// $sql = array(
//   "CREATE TABLE products(
//     id INT(11) PRIMARY KEY AUTO_INCREMENT,
//     product_name VARCHAR(30),
//     product_price INT(11),
//     product_img VARCHAR(100)
//   );",
//   "CREATE TABLE users(
//     id INT(11) PRIMARY KEY AUTO_INCREMENT,
//     username VARCHAR(30),
//     password VARCHAR(30),
//     lastname VARCHAR(30),
//     firstname VARCHAR(30)
//   );"
// );
// foreach ($sql as $table) {
//   if (mysqli_query($conn, $table)) {
//     echo "Tables created successfully";
//   } else {
//     echo "Error: " . mysqli_connect_error($conn);
//   }
// }

// $sql = array(
//   "INSERT INTO `products` (product_name, product_price, product_img) VALUES
//   ('Cap', 499, 'cap.jpg'),
//   ('Eyeglass', 2259, 'eyeglass.jpg'),
//   ('Headphone', 1500, 'headphone.jpg'),
//   ('Jacket', 999, 'jacket.jpg'),
//   ('Watch', 2999, 'watch.jpg');
// ",
//   "INSERT INTO `users` (username, password, lastname, firstname) VALUES 
//   ('user', 'user', 'Four', 'Fantastic'),
//   ('clinton', 'user1', 'Orbana', 'Clinton'),
//   ('earl', 'user2', 'Mariano', 'Earl'),
//   ('john', 'user3', 'Mariano', 'John'),
//   ('venedic', 'user4', 'Evangelista', 'Venedic'),
//   ('angelo', 'user5', 'Cabunsol', 'Angelo');
// "
// );
// foreach ($sql as $insert) {
//   if (mysqli_query($conn, $insert)) {
//     echo "Data inserted successfully";
//   } else {
//     echo "Error: " . mysqli_connect_error($conn);
//   }
// }
