<?php 

    $foods = array("banana" ,"apple","pineapple","kiwi");

    array_push($foods,"cake" ,"biscuits");



    $coun= count($foods);
    echo "there are {$coun} of foods in the array <br>";

    
    foreach($foods as $food){
        echo $food ."<br>";
    }

    echo "the third element of the array is {$foods[2]} <br>";

?>