<?php 
function validate_username($username){
    
    //empty
    if(empty($username)){
        return false;
    }
    //length
    if(strlen($username) < 8){
        return false;
    }
    //contain symbol 
    if(str_contains($username,' ')){
        return false;
    }
    return $username;
}

function isValidEmail($email) {
    $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    return preg_match($pattern, $email);
}


?>