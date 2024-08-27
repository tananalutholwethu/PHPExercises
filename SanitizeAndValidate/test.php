<?php

$input = "Lutholwethu Tanana";


if (preg_match("/[a-zA-Z]+\s[a-zA-Z]/", $input)) {
    return $input;
}
if (preg_match("/^[a-zA-Z]+\s[a-zA-Z]/", $input)) {
    return $input;
}
if (preg_match("/[a-zA-Z]+\s[a-zA-Z]$/", $input)) {
    return $input;
}
if (preg_match("/^[a-zA-Z]+\s[a-zA-Z]$/", $input)) {
    return $input;
}
if (preg_match("/[a-zA-Z]+\s[a-zA-Z]+/", $input)) {
    return $input;
}
if (preg_match("/^[a-zA-Z]+\s[a-zA-Z]+/", $input)) {
    return $input;
}
if (preg_match("/[a-zA-Z]+\s[a-zA-Z]+$/", $input)) {
    return $input;
}
if (preg_match("/^[a-zA-Z]+\s[a-zA-Z]+$/", $input)) {
    return $input;
}





?>
