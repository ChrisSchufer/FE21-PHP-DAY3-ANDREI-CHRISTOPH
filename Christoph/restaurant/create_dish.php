<form method="POST">
 <div class="row mb-3">
  <div class="col">
    <input type="text" class="form-control" placeholder="Dish-NAME" aria-label="Dish-NAME" name="name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Dish-IMG" aria-label="Dish-IMG" name="img">
  </div>
</div>
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Dish-PRICE" aria-label="Dish-PRICE" name="price">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Dish-DESCRIPTION" aria-label="Dish-DESCRIPTION" name="desc">
  </div>
</div>
  <button type="submit" class="btn btn-primary mt-2" name="submit">Add Dish</button>
</form>

<?php
require_once "db_connect.php";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $img = $_POST['img'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];

    $query = "INSERT INTO `dishes`(`img`, `name`, `mealDescription`, `price`) VALUES ('$img','$name','$desc','$price')";
    $result = mysqli_query($conn, $query);

    if($result) {
        echo "<p class='text-success'>Dish added successfully!</p>";
        header("Refresh:0");
    }
}
