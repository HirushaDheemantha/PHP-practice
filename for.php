 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="for.php" method="get">
    <label>Enter a Number to count to</label>
    <input type="text" name="counter">
    <input type="submit" value="start">

</form>
    
<?php

$counter = $_GET["counter"];

for($i=1; $i <= $counter ; $i++){
    echo "$i <br>";
}


echo "counting is done upto {$counter}";

?>


</body>
</html>