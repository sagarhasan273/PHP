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
$myfile = fopen("webdictionary.txt", "r") or die('<script>alert("Welcome to Geeks for Geeks")</script>');
// echo fread($myfile,filesize("webdictionary.txt"));
do{
    echo fgets($myfile,filesize("webdictionary.txt"))."<br>";
}while(!feof($myfile));

fclose($myfile);
?>
</body>
</html>