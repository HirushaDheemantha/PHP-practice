<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<form action="post.php" method="post">
    <label>Item:  </label><br>
    <input type="text" name="item"><br>
    <label>Quantity:  </label><br>
    <input type="number" name="quantity">
    <br>
    <input type="submit" value="total">
</form>


</body>
</html>

<?php 
    $item = $_POST["item"];
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $quantity * $price ;

    echo "You have ordered {$quantity}x {$item} <br>";
    echo "Your order is $ {$total} <br>";
    echo "Thank you for shopping!";


?>