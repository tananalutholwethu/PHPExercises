
<?php

//VALIDATE NAME AND SURNAME
function ValidateStringInput($input) {
    //Check if input is not empty
    if (!empty($input)) {
        //CHECK IF USER INPUT IS A STRING
        if (is_string($input)) {
            //SANITIZE INPUT
            $input = SanitizeInput($input);
            if (preg_match("/^[a-zA-Z-]+$/", $input)) {
                return $input;
            } else {
                print "<span style='color: red'>Please enter valid input!</span>";
            }
        } else {
            print "<span style='color: red'>Please enter valid input!</span>";
        }
    } else {
        print "<span style='color: red'>Field can't be empty!</span>";
    }
}

//VALIDATE AND HASH PASSWORDS
function ValidatePassword($input) {
    $error = false; //If error is true, print message, else return password
    //check if input is not empty
    if (!empty($input)) {
        //PASSWORD VALIDATIONS
        //- MUST BE 8-20 CHARACTERS LONG
        if (!$input >= 8 && !$input <= 20) {
            $error = true;
            print "<span style='color: red'>Password must have 8-20 characters!!</span><br>";
        }
        //- MUST HAVE AT LEAST 1 UPPER AND 1 LOWER CASE CHARACTER
        if (!preg_match("/[a-z]/",$input)) {
            $error = true;
            print "<span style='color: red'>Password must have at least 1 lower-case letter!</span><br>";
        }
        if (!preg_match("/[A-Z]/",$input)) {
            $error = true;
            print "<span style='color: red'>Password must have at least 1 UPPER-case letter!</span><br>";
        }
        //- MUST HAVE AT LEAST 1 SPECIAL CHARACTER
        if (!preg_match("/[~`!@#$%^&*()-_=+;:',.]/",$input)) {

            $error = true;
            print "<span style='color: red'>Password must have at least 1 special characters!!</span><br>";
        }
        //- MUST HAVE AT LEAST 1 NUMBER
        if (!preg_match("/[0-9]/",$input)) {

            $error = true;
            print "<span style='color: red'>Password must have at least 1 number!!</span><br>";
        }
        if ($error==false) //If error is still false, print message, else return password
        {
            return $input;
        }
    } else {
        print "<span style='color: red'>Password can't be empty!</span><br>";
    }
}

//VALIDATE AGE
function ValidateNumber($input) {
    if(!empty($input)){
        $input=SanitizeInput($input);
        $input=(int)$input;
       if(is_int($input)){
           
           
           if($input<15||$input>23){
               echo "<span style='color: red'>Student age must be between 15-23!</span>";
           }else{
               return $input;
           }
       } else{
           echo "<span style='color: red'>Age must be a number between 15-23!</span>";
       }
    }else {
        print "<span style='color: red'>Required!</span><br>";
    }
}

//VALIDATE GRADE...INPUT format MUST BE Grade 10-12
function ValidateGrade($input) {
    
    if(!empty($input)){
        //SANITIZE USER INPUT
        $input=SanitizeInput($input);
        
        //CONVERT USER CASE TO FORMAT CASE
        $input= strtolower($input);//CONVERT ALL TO LOWER CASE
        $input= strtoupper($input[0]).substr($input,1);
        //
        //VALIDATE  ALLOWED GRADE FORMAT
        if(preg_match("/^Grade\s(10|11|12)$/", $input)){
            return $input;
        }
        else{
            echo "<span style='color: red'>$input  is an invalid format!";
        }
    }else {
        print "<span style='color: red'>Grade can't be empty!</span><br>";
    }
}

//SANITIZE AND TRIM UNNECESSARY WHITE SPACE ON USER INPUT
function SanitizeInput($input) {
    $input = trim($input);
    $input = htmlspecialchars($input);
    return $input;
}


//GENERATE USERNAME USING THE NAME AND SURNAME
function GenerateUsername($name,$surname){
    $username="$surname.$name@user.com";
    
    return strtolower($username);
}

?>

