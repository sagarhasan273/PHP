<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Required</title>
    <style>
        .error{
            color: #FF0000;
        }
    </style>
</head>
<body>
    <?php
    $name_err = $email_err = $gender_err = $website_err = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["name"])){
            $name_err = "required field";
        } else{
            $name = test_input($_POST["name"]);
        }
        if (empty($_POST["email"])){
            $email_err = "required field";
        } else{
            $email = test_input($_POST["email"]);
        }
        if (empty($_POST["website"])){
            $website_err = "required field";
        } else{
            $website = $_POST["website"];
        }
        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment =$_POST["comment"];
        }
        if (empty($_POST["gender"])){
            $gender_err = "required field";
        } else{
            $gender = $_POST["gender"];
        }
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h1>PHP Form Validation Example</h1>
    <p><span class="error">* required field</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        Name: <input type="text" name="name"> <span class="error"> *<?php echo $name_err; ?></span><br><br>
        Email: <input type="text" name="email"> <span class="error">*<?php echo $email_err; ?></span><br><br>
        Website: <input type="text" name="website"> <span class="error"><?php echo $website_err; ?></span><br><br>
        Comment: <textarea name="comment" id="" cols="20" rows="5"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="others">Others
        <span class="error">*<?php echo $gender_err; ?></span>
        <br><br>
        <input type="submit" name="submit" value="submit"><br>
    </form>
    <h2>Your input: </h2><br>
    <?php
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>
</body>
</html>