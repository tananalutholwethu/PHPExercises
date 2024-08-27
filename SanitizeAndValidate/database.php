<?php
$database_Server="localhost";
$database_Name="mydatabase";
$database_Username="olwethutanana";
$database_Password="GadMae11";
$database_Connection="";

$database_Connection= 
        mysqli_connect(
        $database_Server,
        $database_Username,
        $database_Password,
        $database_Name);

try{
    
} 
catch (Exception $ex) {
echo "Error: ".$ex->getMessage();
}

if($database_Connection==true){
    echo "Connect";
}
?>

    
    
    
    
    
    
    
    
    
    
    
    

