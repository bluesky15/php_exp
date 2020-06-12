<!DOCTYPE HTML>
<html>
<head>
    <?php
    include 'bootstrap_css.php';
    ?>
</head>
<body>
<div class="container">
    <?php
    include 'error_log.php';
    $str = "this is a string";
    echo $str;
    echo "<br>";
    echo strtoupper($str);
    echo "<br>";
    echo strlen($str);
    ?>
</div>
<?php
include 'bootstrap_js.php';
?>
</body>
</html>