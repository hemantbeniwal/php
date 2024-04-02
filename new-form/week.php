<?php

// $w = "jan";

// switch ($w) {
//     case "sun":
//         echo "sunday";
//         break;
//     case "mon":
//         echo  "monday";
//         break;
//     case "tue":
//         echo "tuesday";
//         break;
//     case "wed":
//         echo "wednesday";
//         break;
//     case "thu":
//         echo "thursday";
//         break;
//     case "fri":
//         echo "friday";
//         break;
//     case "sat":
//         echo "saturday";
//         break;
//     default:
//         echo "the is not a valid week";
//         break;


// }


$a = 50;
$b = 500;
$c = 600;
$d = 70;

if($a > $b) {
    if($a > $c) {
        if($a > $d) {
            echo "A is big 1";
        }else {
            echo "D is big 1";
        }
    }else {
        if($c > $d) {
            echo "C is big 1";
        }else {
            echo "D is big 2";
        }
    }
}else {
    if($b > $c) {
        if($b > $d) {
            echo "B is big 1";
        }else {
            echo "D is big 3";
        }
    }else {
        if($c > $d) {
            echo "C is big 2";
        }else {
            echo "D is big 4";
        }
    }
}

?>