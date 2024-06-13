<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="assoc_array.php" method="post" >
        <Label> Enter a country </Label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php 

    // $capitals["CHINA"] = "BEIJING";      add new
    // $capitals["USA"] = "LaS vegas";      assign
    // array_pop($capitals);                remove last pair
    // array_shift($capitals);              remove first pair
    // $keys = array_keys($capitals);       output keys
    // $values = array_values($capitals);  output values from foreach
    // $capitals = array_flip($capitals);   change key value pairs
    // $capitals = array_reverse($capitals); reverse the order


    // foreach($capitals as $key=> $value){
    //     echo "{$key} {$value} <br>";
    // }

    $capitals = array("USA"=>"Washington DC",
    "UK" => "London",
     "India" => "Delhi",
     "srilanka" => "colombo");


    $capital = $capitals[$_POST["country"]] ."<br>";
    echo "the capital is {$capital}";


?>