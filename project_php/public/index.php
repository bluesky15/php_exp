<html>
<head>
    <?php
    include 'bootstrap.php';
    include 'errolog.php';
    ?>
</head>
<body>
<div class="container">
    <?php
    $dir = dirname(__FILE__) . "/";
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if ($file !== "." && $file !== "..") {
                    echo "<a href=\"$file\">$file</a><br>";
                }
            }
            closedir($dh);
        }
    }
    ?>
</div>

</body>
</html>
