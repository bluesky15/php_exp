<!DOCTYPE HTML>
<html>
<head>
    <?php
    include 'bootstrap_css.php';
    include 'error_log.php';
    ?>
</head>
<body>
<div class="container">
    <?php
    $myCars = array("BMW", "Volvo", "Audi", "Tesla");
    print_r($myCars);
    echo "<br>";
    var_dump($myCars);
    echo "<br>";
    foreach ($myCars as $car) {
        echo "I have one " . $car . "<br>";
    }
    ?>
</div>

</body>
</html>
