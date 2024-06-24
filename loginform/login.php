<?php 
    
    session_start();
    
    include("database.php");



?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form action="login.php" method="POST">
            <div class="field">
               <input type="text" required name="user">
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" required name="password">
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Login" name="login">
            </div>
            <div class="signup-link">
               Not a member? <a href="#">Signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>


<?php 

    if(isset($_POST["login"])){
        
        $_SESSION['username'] = $_POST["user"];
        $_SESSION['password'] = $_POST['password'];

        $username = $_SESSION["username"];
        $password = $_SESSION['password'];
        
        $sql = "INSERT INTO users (user,password) VALUES ('$username' , '$password')";

        try{
            mysqli_query($conn,$sql);
            echo "data is inserted";
            header("location: home.php");
        }
        catch(mysqli_sql_exception){
            echo "could not register";
        }
    }

    mysqli_close($conn); 

?>