<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <h1>ADD STUDENTS TO DATABASE</h1>
            <input style="width: 100px" type="button" name="register" value="Register">
            &nbsp
            <input style="width: 100px" type="button" name="login" value="Login">
        </form>


    </body>
</html>
