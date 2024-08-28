<?php 
if(isset($_POST['login']))//If Register button is clicked
{
    header('Location: /PHPExercises/Students/Login.php');//Redirect to this page
    exit();//Exit to ensure no scripts are executed
}
if(isset($_POST['register']))//If login button is clicked
{
    header('Location: /PHPExercises/Students/Register.php');//Redirect to this page
    exit();
}
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <h1>ADD STUDENTS TO DATABASE</h1>
            <input style="width: 100px" type="submit" name="register" value="Register">
            &nbsp
            <input style="width: 100px" type="submit" name="login" value="Login">
        </form>


    </body>
</html>
