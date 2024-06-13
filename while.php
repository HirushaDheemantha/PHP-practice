<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="while.php" method="POST">
    <label>while loop increment controller</label>
    <br>
    <input type="submit" name="stop" value="stop">
    </form>
    <?php 
        $stop = $_POST["stop"];
        
        $seconds = 0 ;
        $stop = true;

        while($stop){
            if(isset($_POST['stop'])){
                $stop = false;

        }else{
            $seconds++;
            echo $seconds . "<br>";          
        }
        }


    ?>

</body>
</html>