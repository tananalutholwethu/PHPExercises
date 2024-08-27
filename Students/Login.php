<!DOCTYPE html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h1>Login</h1><br>
        
           <label>Username: </label><br>
            <input type="text" name="name" placeholder="First name"><br><br>
            <label>Password: </label><br>
            <input type="password" name="password1" placeholder="Password"><br><br>
            <input type="submit" name="login" value="Login">
            <br>
            <a href="Register.php">Create Account</a>
        </form> 
    </body>
</html>

