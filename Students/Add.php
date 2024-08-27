<!DOCTYPE html>
    <head>
        <title>Add Students</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <a href="index.php">Logout</a>
        <h1>ADD STUDENTS</h1><br>
        
            <label>Student Name: </label><br>
            <input type="text" name="name" placeholder="First name"><br><br>
            <label>Student Surname: </label><br>
            <input type="text" name="surname" placeholder="Last name"><br><br>
            <label>Age: </label><br>
            <input type="number" name="age" placeholder="Student Age"><br><br>
            <label>Grade: </label><br>
            <input type="text" name="grade" placeholder="Grade 10 - 12"><br><br> <!--Validate using reg_ex matching-->
            <input type="submit" name="add" value="Add">
            <br>
        </form> 
    </body>
</html>

