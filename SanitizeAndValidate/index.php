<?php
include "Functions.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sanitize and Validate</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <h1>SANITIZE AND VALIDATE</h1>
            <h3>Sanitize and validate user input for security.</h3>
            <label>Full Name: </label>
            <br>
            <input type="text" name="name" placeholder="Full Name">
            <br>
            <br>
                     <label>Email: </label>
            <br>
            <input type="email" name="email" placeholder="youremail@example.com">
            <br>
            <br>
                        <label>Age: </label>
            <br>
            <input type="number" name="age" placeholder="Your age">
            <br>
            <br>
                        <label>Password: </label>
            <br>
            <input type="password" name="password" placeholder="Password">
            <br>
            <br>
            <br>
        
            <input type="submit" value="Login" name="login">
        </form>
        
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //SANITIZE AND TRIM INPUT
    $name=sanitizeInput($_POST['name']);
    $email=sanitizeInput($_POST['email']);
    $age=sanitizeInput($_POST['age']);
    //WE WON'T SANITIZE THE PASSWORD!
    
    //AFTER WE SANITIZE, WE NOW NEED TO VALIDATE OUR USER INPUT
    $name = validateName($name);
    $email = validateEmail($email);
    $age = validateAge($age);
    $password = validatePassword($_POST['password']);
    echo "<br><hr>Full Name: $name<br>Email: $email<br>Age: $age<br>Password: $password";
}
?>
            
  
        
    </body>
</html>
