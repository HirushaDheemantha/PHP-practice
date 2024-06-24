<?php 
    include("database.php");
    
    $user = "hirushadheemantha";
    $pass= "23962";
    $hash = password_hash($pass,PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (user,password) VALUES ('$user' , '$hash')";
    
    try{
        mysqli_query($conn,$sql);
        echo "data is inserted";
    }
    catch(mysqli_sql_exception){
        echo "could not register";
    }
    mysqli_close($conn); 
 ?>
