<?php
function greet($msg)
{
    echo $msg;
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l") . "<br>";
    echo "The time is " . date("h:i:sa") . "<br>";
}

?>
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
    greet("<h1>Hello world</h1>");
    ?>
</div>
</body>
</html>
