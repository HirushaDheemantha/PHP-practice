<?php 
    include("database.php");
    "<br>";

    $sql = "SELECT * from users WHERE user = 'hirusha' ";
    $result = mysqli_query($conn , $sql);

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){;  
        echo $row['id'] . "<br>";
        echo $row['user'] . "<br>";
        echo $row['register_date'] . "<br>";}
        }else{
        echo "no result";
    
}

// we can itereate with while or just take releavant data by mysqli_fetch_assoc
?>