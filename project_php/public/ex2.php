<html>
<head>
<?php
include 'bootstrap.php';
?>
</head>
<body>
<div class="container">
<form action="<?php $_SERVER["PHP_SELF"] ?>" method="GET">
    Name: <input type="text" name="name"/>
    Weight: <input type="text" name="weight"/>
    <input type="submit"/>
</form>
</div>
<?php
include 'errolog.php';
var_dump($_GET);
if ($_GET["name"] || $_GET["weight"]) {
    echo "Welcome " . $_GET['name'] . "<br />";
    echo "You are " . $_GET['weight'] . " kgs in weight.";
    exit();
}
?>
</body>
</html>