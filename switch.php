<?php

$date = date('l'); // Get the full textual representation of the day

switch($date){
    case "Monday":
        echo "It's Monday";
        break;
    case "Tuesday":
        echo "It's Tuesday";
        break;
    case "Wednesday":
        echo "It's Wednesday";
        break;
    case "Thursday":
        echo "It's Thursday";
        break;
    case "Friday":
        echo "It's Friday";
        break;
    case "Saturday":
        echo "It's Saturday";
        break;
    case "Sunday":
        echo "It's Sunday";
        break;
    default:
        echo "Invalid day";
}

?>
