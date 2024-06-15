<!-- isset is a function which shows true if variable has a value or 0 or false if its null -->
 <!-- empty string is checking whether the variable is assigned or not if no its true if its null its also true -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset.php" method="POST">
        <label>Username</label>
        <input type="text"  name="username">
        <label>Password</label>
        <input type="password" name="password">
        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>


<?php 

    $cake = null;
    if(empty($cake)){
        echo "true <br>";
    }else{
        echo"false <br>";
    }
    
    if(isset($_POST['login'])){

    $username = $_POST["username"];
    $password =$_POST["password"];

    if(empty($username)){
        echo "Username is missing <br>";
    }elseif(empty($password)){
        echo "password is missing";
    }else{
        echo "Hello {$username} <br>";
    }
}

    foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";
    }


?>