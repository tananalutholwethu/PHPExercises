<?php include'Functions.php' ?>

<!DOCTYPE html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <h1>REGISTER</h1><br><br>
            <label>Name: </label><br>
            <input type="text" name="name" placeholder="First name">&nbsp
            <?php
            
            if (isset($_POST["register"])) {
                $name = ValidateStringInput($_POST["name"]);
                echo $name;
            }
            else{print "<span style='color: red'>*</span>";}
            ?><br><br>
            <label>Surname: </label><br>
            <input type="text" name="surname" placeholder="Last name">
                        <?php
            if (isset($_POST["register"])) {
                $name = ValidateStringInput($_POST["surname"]);
                echo $name;
            }
            else{print "<span style='color: red'>*</span>";}
            ?><br><br>
            <label>Password: </label><br>
            <input type="password" name="password1" placeholder="Password"><br><br>
            <label>Confirm Password: </label><br>
            <input type="password" name="password2" placeholder="Confirm Password"><br><br>
            <input type="submit" name="register" value="Register">
            <br>
            <label>Already a user? </label><a href="Login.php">Login</a>
        
        </form> 

    </body>
</html>

