<!-- radio buttons are checked on switch case statements and output relevant values -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <form action="radiobuttons.php" method="post">
    <input type="radio" name="credit_card" value="visa"> VISA <br>
    <input type="radio" name="credit_card" value="mastercard"> Mastercard <br>
    <input type="radio" name="credit_card" value="american express"> American Express <br>
    <input type="submit" name="confirm" value="Submit">
 </form>

</body>
</html>

<?php 

    if(isset($_POST['confirm'])){       

        $credit_card = null;}

        // // if(isset($_POST["credit_card"])){
        // //     $credit_card = $_POST["credit_card"];
        // //     echo "you have selected {$credit_card}";
        // // }else{
        // //     echo "you have to select a card";
        // // }

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
        

        switch($credit_card){
            case "visa":
                echo "you have selected VISA";
                break;
            case "mastercard":
                echo "you have selected Mastercard";
                break;
            case "american express":
                echo "you have selected American Express";
                break;
            default:
                echo "You have to select a card";
        
        
        }
           
    }


    
?>


