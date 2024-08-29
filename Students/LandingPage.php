<?php 
include "Database.php";
session_start(); //Start all sessions we stored on the Register file 
if(isset($_GET['logout'])===true){//GET BECAUSE ANCHORS ONLY USE GET METHOD
//    session_unset();
//    session_destroy();
    header("Location: /PHPExercises/Students/index.php");
    
}
if(isset($_POST['add'])){

    header("Location: /PHPExercises/Students/Add.php");
    exit();
}
elseif(isset($_POST['view'])){

    header("Location: /PHPExercises/Students/ViewStudents.php");
    exit();
}

?>

<!DOCTYPE html>
    <head>
        <title>Landing Page</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <a href="?logout=true">Logout</a>
            <h1>LANDING PAGE</h1><br><hr>
            <?php if (isset($_SESSION['username'])): ?>
                <h3>Welcome <?php echo $_SESSION['name']; ?></h3>
                <p>Here is your username: <?php echo $_SESSION['username']; ?></p>
            <?php else: echo "Session data not found. Please log in again.";
            endif
            ?>
                <br><hr><br>
                <input type="submit" name="add" value="ADD STUDENTS" style="width: 150px; height: 100px">&nbsp&nbsp
                <input type="submit" value="VIEW STUDENTS" name="view" style="width: 150px; height: 100px">
        </form> 
    </body>
</html>

