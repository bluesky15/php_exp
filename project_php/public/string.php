<!DOCTYPE html>
<html>
<head>
<?php
include 'bootstrap.php';
?>
</head>
<body>
<div class="container">
<?php
include 'errolog.php';
$str = "this is a string";
echo $str;
echo "<br>";
echo strtoupper($str);
echo "<br>";
echo strlen($str);
?>
</div>
<?php
include 'bootstrapjs.php';
?>
</body>
</html>