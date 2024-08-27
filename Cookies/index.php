<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cookies</title>
    </head>
    <body>
            <form action="index.php" method="post">
            <input type="text" name="username" placeholder="Username"><br><br>
            <input type="text" name="email" placeholder="Email"><br><br>
            <input type="text" name="age" placeholder="Age">

            <br><br>
            <input type="submit" name="login">

        </form>
        
<?php
if (isset($_POST['login'])) {//If we press the login button
    //sanitize my data
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);//FILTERS OUT ALL SPECIAL CHARACTER
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);//FILTERS EVERY SPECIAL CHARACTER BESIDES EMAIL CHARACTERS
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);//FILTERS EVERY SPECIAL CHARACTER BESIDES NUMBERS

    //validate

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);//VALIDATES EMAIL,IF INPUT IS NOT EQUAL TO A EMAIL,IT RETURNS FALSE
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    if (empty($email)) {
        echo "<br>Please enter a valid email!";
    } else {
        echo"<br> Your email is $email";
    }
    if ($age==false) {
        echo "<br>Please enter a valid age!!";
    } else {
        echo"<br> You are $age years old!";
    }
    }
    
    
    setcookie("name",$username,time()+(86400),"/");
    setcookie("email",$email,time()+(86400),"/");
    setcookie("age",$age,time()+(86400),"/");
    
    echo"<br><br><br>COOKIES<br><hr><br>";
    foreach($_COOKIE as $key=>$value){
        echo "$key >>>>> $value<br>";
        
    }
   
    
    
    
?>
    </body>
</html>
