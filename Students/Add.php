<?php
include "Database.php";
include "Functions.php";
?>
<!DOCTYPE html>
    <head>
        <title>Add Students</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <a href="index.php">Logout</a>
            <h1>ADD STUDENTS</h1><br><hr><br>
        
            <label>Student Name: </label><br>
            <input type="text" name="name" placeholder="First name">
        <?php
        if (isset($_POST["add"])) {
            $name = ValidateStringInput($_POST["name"]);
            echo $name;
        } else {
            print "<span style='color: red'>*</span>";
        }
        ?>
            <br><br>
            
            
            <label>Student Surname: </label><br>
            <input type="text" name="surname" placeholder="Last name">
        <?php
        if (isset($_POST["add"])) {
            $surname = ValidateStringInput($_POST["surname"]);
            echo $surname;
        } else {
            print "<span style='color: red'>*</span>";
        }
        ?>
            <br><br>
            
            
            <label>Age: </label><br>
            <input type="number" name="age" placeholder="Student Age">
        <?php
        if (isset($_POST["add"])) {
            $age = ValidateNumber($_POST["age"]);
            echo $age;
        } else {
            print "<span style='color: red'>*</span>";
        }
        ?>
            <br><br>
            
            
            <label>Grade: </label><br>
            <input type="text" name="grade" placeholder="Grade 10 - 12">
        <?php
        if (isset($_POST["add"])) {
            $grade = ValidateGrade($_POST["grade"]);
            echo $grade;
        } else {
            print "<span style='color: red'>*</span>";
        }
        ?>
            <br><br>
            <!--Validate using reg_ex matching-->
            
            
            <input type="submit" style="width: 100px" name="add" value="Add">&nbsp<input style="width: 100px" type="submit" name="view" value="View Students">
            <br>
        </form> 
        <?php
        //ADD INFO TO DATABASE
        if (isset($_POST['add'])) {

            //SQL QUERY
            $sql = "insert into student(name,surname,age,grade) "
                    . "values('$name','$surname','$age','$grade')";

            $result = mysqli_query($connection, $sql);
        }
        ?>
    </body>
</html>

