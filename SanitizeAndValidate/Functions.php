<?php

function validatePassword($input) {
    /*
      CHECK IF PASSWORD INPUT IS NOT EMPTY
      CHECK IF PASSWORD IS A STRING

      PASSWORD CRITERIA

      PASSWORD MUST HAVE >=8 CHARACTERS

      using preg_match()
      MUST HAVE AT LEAST 1 SPECIAL CHARACTER
      MUST HAVE AT LEAST 1 UPPERCASE CHARACTER
      MUST HAVE AT LEAST 1 LOWERCASE CHARACTER
      MUST HAVE AT LEAST 1 NUMBER
     */
    $error = false;

    if (!empty($input)) {#CHEXKS IF THE USER PROVIDED INPUT
        if (is_string($input)) {
            if (strlen($input) < 8) {
                $error = true;
                echo"Password must have 8 or more characters!<br>";
            }
            if (!preg_match("/[!@#$%^&*()\-_=+{};:,<.>]/", $input)) {
                $error = true;
                echo"Password must have at least 1 special characters!<br>";
            }
            if (!preg_match("/[A-Z]/", $input)) {
                $error = true;
                echo"Password must have at least 1 UPPER-CASE characters!<br>";
            }
            if (!preg_match("/[a-z]/", $input)) {
                $error = true;
                echo"Password must have at least 1 lower-case characters!<br>";
            }
            if (!preg_match("/[0-1]/", $input)) {
                $error = true;
                echo"Password must have at least 1 number!<br>";
            }
            if ($error == false) {

                $password = $input;
                $hashedPassword = password_hash($input, PASSWORD_DEFAULT);
                return $password;
            }
        } else {
            echo "Input must be a string<br>";
        }
    } else {
        echo"Please enter a password!<br>";
    }
}

function validateName($input) {
    /*
      CHECK IF NAME INPUT IS NOT EMPTY
      CHECK IF NAME IS A STRING

      NAME CRITERIA

      MUST NOT CONTAIN ANY SPECIAL CHARACTERS EXEPT THE ONES YOU ALLOW using preg_match() */
    if (!empty($input)) {
        if (is_string($input)) {
            if (preg_match("/^[a-zA-Z-]+\s[a-zA-Z-]+$/", $input)) {//Match if input has 1/more a-z characters, a space, and ends with a-z word .
                return $input;
            } else {
                echo "Enter a valid Full Name!<br>";
            }
        }
    }
}

function validateEmail($input) {
    //CHECK IF EMAIL INPUT IS NOT EMPTY
    //CHECK IF EMAIL IS A STRING
    //
    //EMAIL CRITERIA
    //
    //VALIDATE IF EMAIL IS CORRECT FORMAT USING filter_var()

    
    
    if (!empty($input)) {
        if (is_string($input)) {
            if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
                return $input;
            } else {
                echo "Enter a valid email!<br>";
            }
        }
    }else{
        print"Please enter a email!<br>";
    }
}

function validateAge($input) 
{

    //CHECK IF AGE INPUT IS NOT EMPTY
    //CHECK IF AGE INPUT IS A INT
    //VALIDATE RANGE IF YOU HAVE TO
    $message = "";
    if (!empty($input)) 
    {
            $input=(int)$input;//CONVERT INPUT IN STRING FORMAT TO INT
            if ($input < 18) 
            {
                echo "Too young!<br>";
            } elseif ($input > 80) 
            {
                echo"Too old!<br>";
            } else 
            {
                return $input;
            }
    } 
    else 
        {
            echo"  Please enter a number!<br>";
        }
}


function sanitizeInput($input) {
    //Remove white spaces at beginning and end of input
    $input = trim($input);
    //Sanitize input
    $input = htmlspecialchars($input);
    return $input;
}

?>
