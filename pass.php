<?php 

    $password = "hirusha";
    $hash = password_hash($password , PASSWORD_BCRYPT);
    echo $hash . "<br>";

    if(password_verify('hirusha',$hash)){
        echo "you are logged in";
    }else{
        echo "incorrect password";
    }

?>