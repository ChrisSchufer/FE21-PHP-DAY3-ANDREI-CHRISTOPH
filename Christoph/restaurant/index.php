<?php
    require "db_connect.php";

    $query = "SELECT * FROM dishes;";
    $result = mysqli_query($conn, $query);
    
    var_dump($result);
    echo "<br>";
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    var_dump($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-2">Challenge: Restaurant</h1>
        <h2 class="text-center mb-5">Create Dish</h2>

        <?php include_once "create_dish.php";?>

        <hr class="mt-5">
        <h2 class="text-center mb-5">Dishes</h2>

        <?php
        foreach($row as $row) {
            echo "
                <div class='card mb-5'>
                    <img src='" . $row['img'] . "' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title text-center'>" . $row['name'] . "</h5>
                        <p class='card-text text-center'>" . $row['mealDescription'] . "</p>
                        <p class='card-text text-center'>Price: " . $row['price'] . "€</p>
                        <a href='delete_dish.php?dishID=" . $row['dishID'] . "' class='btn btn-primary'>Delete this dish</a>
                    </div>
                </div>
            ";
        }
    ?>
    </div>
    
</body>
</html>