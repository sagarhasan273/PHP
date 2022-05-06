<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
</head>
<body>
    <?php
    echo "hello world!" . "<br>";
    $x = 5 + /* 5 + 6*/ + 7;
    echo $x;

    /* This is a multiple-lines comment block
that spans over multiple
lines */

    # this is a comments also.
    // this is a comment as well.
    ?>
</body>
</html>