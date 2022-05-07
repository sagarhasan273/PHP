<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = "Hello world!";
    print(strlen($str));
    print "<br>";
    print(str_word_count($str));
    print "<br>";
    print(strrev($str));
    print "<br>";
    print(strpos($str, "world"));
    print "<br>";
    print(str_replace("world", "dolly", $str));
    ?>
</body>
</html>