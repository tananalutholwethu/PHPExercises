<?php session_start(); ?>

<!DOCTYPE html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h1>Login</h1><br>
        
           <label>Username: </label><br>
            <input type="text" name="username" placeholder="Username"><br><br>
            <label>Password: </label><br>
            <input type="password" name="password" placeholder="Password"><br>
            
                        <?php
            if ($_SESSION['username'] == htmlspecialchars($_POST['username']) && $_SESSION['password'] == htmlspecialchars($_POST['password'])) {

                header("Location: /PHPExercises/Students/LandingPage.php");
                exit();
            } else {
                echo "<span style='color: red'>Password or Username is wrong, try again!!</span>";
            }
            ?><br><br>
            <input type="submit" name="login" value="Login">
            <br>
            <a href="Register.php">Create Account</a>
            

        </form> 
    </body>
</html>

