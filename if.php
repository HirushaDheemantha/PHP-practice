<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="if.php" method="get">
    <label>Hours worked: </label>
    <input type="text" name="hours">
    <input type="submit">

    </form>

<?php

$hours = $_GET['hours'];
$rate = 15;
$total = null;


if($hours <= 0){
    $total = 0;

}elseif($hours <= 40 ){
    $total = $hours * $rate;
    
}else{
    $total = ($hours-40)*($rate*1.5) + (40 * 15);
       
}

    echo "Your Weekly pay is \${$total}";

?>

</body>
</html>