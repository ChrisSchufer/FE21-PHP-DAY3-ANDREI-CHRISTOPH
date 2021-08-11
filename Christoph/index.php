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
        <p class="text-center display-3 mt-3">Exercise 1</p>
        <?php
            $myName = 'Christoph';
            for($i = 1; $i <= 50; $i++) {
                echo $i . "->" . $myName . " ";
            }
        ?>
        <hr>
        <p class="text-center display-3 mt-3">Exercise 2</p>
         <?php
            $myArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
            foreach($myArray as $key => $val) {
                echo "index:" . $key . "->" . $val . " ";
            }
        ?>
        <hr>
        <p class="text-center display-3 mt-3">Exercise 3</p>
        <?php
            $randArray = [];
            function highestNum($arr) {
                echo max($arr);
            }
           for($i = 0; $i < 10; $i ++) {
               array_push($randArray, rand(0, 100));
           }
        //    asort($randArray);
        //    foreach($randArray as $val) {
        //        echo $val . " ";
        //    }

           echo "<br>Highest number in Array is " . "<br>" . highestNum($randArray);

        ?>
        <hr>
        <p class="text-center display-3 mt-3">Exercise 4</p>
        <?php
            for($i = 1; $i <= 100; $i++) {
                if($i % 3 == 0 && $i % 5 == 0) {
                    echo "Full-Stack" . "<br>";
                }elseif($i % 3 == 0) {
                    echo "Back-end" . "<br>";
                }elseif($i % 5 == 0) {
                    echo "Front-end" . "<br>";
                }else {
                    echo $i . "<br>";
                }
            }
        ?>
    </div>
</body>
</html>