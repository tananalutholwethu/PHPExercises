<?php 
session_start();
include'Functions.php';
$name="";
$surname="";
$username="";
$password="";


?>

<!DOCTYPE html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <h1>REGISTER</h1>
            <br><br>
            
            <label>Name: </label><br>
            <input type="text" name="name" placeholder="First name">&nbsp
            <?php
            if (isset($_POST["register"])) {
                $name = ValidateStringInput($_POST["name"]);
            } else {
                print "<span style='color: red'>*</span>";
            }
            ?>
            <br><br>
            
            <label>Surname: </label><br>
            <input type="text" name="surname" placeholder="Last name">
            <?php
            if (isset($_POST["register"])) {
                $surname = ValidateStringInput($_POST["surname"]);
            } else {
                print "<span style='color: red'>*</span>";
            }
            ?>
            <br><br>
            
            <label>Password: </label><br>
            <input type="password" name="password1" placeholder="Password"><?php
            if (!isset($_POST["register"])) {
                print "<span style='color: red'>*</span>";
            }
            ?>
            <br><br>
            
            <label>Confirm Password: </label><br>
            <input type="password" name="password2" placeholder="Confirm Password"><br>
            <?php
            if (isset($_POST["register"])) {//IF BUTTON IS CLICKED
                $password1 = ValidatePassword($_POST['password1']); //WE VALIDATE THE FIRST PASSWORD
                $password2 = htmlspecialchars($_POST['password2']); //WE DONT NEED TO VALIDATE THE 2ND PASSWORD,IT JUST NEEDS TO MATCH THE PREVIOUS ONE
                $password = "";
                if (isset($password1) && isset($password2)) {
                    if ($password1 == $password2) {//IF THEY MATCH
                        $password = $password1;
                        echo "<span style='color: green '>Passwords Match!</span>";
                    } else {
                        echo "<span style='color: red'>Passwords don't match!</span>";
                    }
                }
            }
            ?>
            <br><br>
            <input type="submit" name="register" value="Register">
            <br>
            <label>Already a user? </label><a href="Login.php">Login</a><br><br>
            <hr>
            
            <?php
            $username = GenerateUsername($name, $surname); //Generate username usin name and surnmame...
            if (isset($_POST["register"]) && !empty($name) && !empty($surname) && $password1 == $password2) {

                $_SESSION['username'] = $username; //Store username on a session
                $_SESSION['name'] = $name; //Store name on a session
                $_SESSION['surname'] = $surname; //Store surname on a session
                $_SESSION['password'] = $password; //Store password on a session
                
                header("Location: /PHPExercises/Students/LandingPage.php"); //Redirect to landing page
                
            }
            ?>
            <br>
           
        </form> 

    </body>
</html>

