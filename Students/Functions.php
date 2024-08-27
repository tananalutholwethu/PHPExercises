
<?php

//VALIDATE NAME AND SURNAME
function ValidateStringInput($input) {
    //Check if input is not empty
    if (!empty($input)) {
        //CHECK IF USER INPUT IS A STRING
        if (is_string($input)) {
            //SANITIZE INPUT
            $input = SanitizeInput($input);
            if(preg_match("/^[a-zA-Z-]+$/",$input)){
                return $input;
            }
            else{print "<span style='color: red'>Please enter valid input!</span>";}
        }
        else{print "<span style='color: red'>Please enter valid input!</span>";}
    }
    else{ print "<span style='color: red'>Field can't be empty!</span>";}
}






//VALIDATE AND HASH PASSWORDS
function ValidatePassword($input) {
    
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

?>
