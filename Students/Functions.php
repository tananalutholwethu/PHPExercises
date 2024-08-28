
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
    
}

//VALIDATE GRADE...INPUT format MUST BE Grade 10-12
function ValidateGrade($input) {
    
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
