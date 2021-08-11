<?php
    require_once "db_connect.php";

    $dishID = $_GET['dishID'];
    $query = "DELETE FROM `dishes` WHERE dishID = $dishID";

    $result = mysqli_query($conn, $query);

    if($result) {
        echo "
            <p class='text-success'>deleted successfully!</p>
            <a href='index.php'>Go to Homepage</a>
        ";
    }
?>