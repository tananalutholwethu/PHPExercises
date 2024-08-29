<?php
include "Database.php";

//HARDCODED ARRAY OF STUDENTS
//$students = [
//    [
//        'id' => '1',
//        'name' => 'John',
//        'surname' => 'Doe',
//        'age' => '32',
//        'grade' => 'Grade 11'
//    ],
//    [
//        'id' => '2',
//        'name' => 'John',
//        'surname' => 'Wick',
//        'age' => '40',
//        'grade' => 'Grade 10'
//    ],
//    [
//        'id' => '3',
//        'name' => 'Marry',
//        'surname' => 'Doe',
//        'age' => '22',
//        'grade' => 'Grade 12'
//    ],
//        ]

//FETCH FROM DB
$sql="select * from student";
$result=mysqli_query($connection,$sql);
$students=mysqli_fetch_all($result, MYSQLI_ASSOC);//All rows and columns returned like the associative array above.
?>
<!DOCTYPE html>
    <head>
        <title>View Students</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <h1>VIEW STUDENTS</h1><br><hr><br>
<?php if (empty($students)): echo "No students added!";?>
<?php else:?>
        <?php // foreach($students as $student: ?>
            <table border="1" style="width: 600px" cellpadding="10" cellspacing="0">
                <tr>
                <th>ID</th>&nbsp
                <th>NAME</th>&nbsp
                <th>SURNAME</th>&nbsp
                <th>AGE</th>&nbsp
                <th>GRADE</th>&nbsp
                </tr>
                <?php foreach ($students as $student):?>
                <tr>
                <td><?php echo $student['id'] ?></td>
                <td><?php echo $student['name'] ?></td>
                <td><?php echo $student['surname'] ?></td>
                <td><?php echo $student['age'] ?></td>
                <td><?php echo $student['grade'] ?></td>
                </tr>
                        
                    
               
                
                
             <?php endforeach;?>   
            </table>
<?php endif;?>
            
        
        </form> 
    </body>
</html>

