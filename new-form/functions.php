<?php

// function onetoten($a)
// {
//     $count = " ";
//     for ($i = 1; $i <=$a ; $i++) { 
//         $count .=$i. " ";
//     }
//     return $count;
// }
// // 1	2	3	4	5	6	7	8	9	10
// // 11	12	13	14	15	16	17	18	19	20
// // 21	22	23	24	25	26	27	28	29	30
// // 31	32	33	34	35	36	37	38	39	40
// // 41	42	43	44	45	46	47	48	49	50
// // 51	52	53	54	55	56	57	58	59	60
// // 61	62	63	64	65	66	67	68	69	70
// // 71	72	73	74	75	76	77	78	79	80
// // 81	82	83	84	85	86	87	88	89	90
// // 91	92	93	94	95	96	97	98	99	100

// echo "<table border='1'>";
// $count =1;
// for ($i=1; $i <=10; $i++)
// {
//     echo "<tr>";
//     for ($j=1; $j <=10; $j++)
//     { 
//         echo "<td bgcolor=yellow>$count</td>";
//         $count++;
//     }
//     echo "</tr>";
// } "echo </table>";
// echo "<table border >";
// $a =1;
// for ($i=1; $i <=10; $i++)
// { 
//     echo "<tr>";
//     for ($j=1; $j <=10; $j++)
//     { 
//         echo "<td>$a</td>";
//         $a++;
//     }
//     echo "<tr>";
// }echo "</table>";
// function even($a)
// {
//     if($a%2==00)
//     {
//         return"true";
//     }else{
//         return"false";
//     }
// }echo even(8)//even or odd number

// function isprime($a)
// {
//     $prime = true;
//     for ($i=2; $i <$a; $i++)

//         { 
//             if($a%$i==0)
//             {
//                 $prime =false;
//                 break;
//             }

//         }
//         return $prime;
//     }
//     echo isprime(10)
// Write a function called calculateBMI that calculates the BMI (Body Mass Index) of a person given their weight in kilograms and height in meters. The formula for BMI is BMI = weight (kg) / (height (m) * height (m)).
// 
// for($i = 5;$i >= 1;$i--)
// {
//     for($j = 1;$j <=5;$j++)
//     {
//         if($j >=1 && $j <$i)
//         {
//             echo "&nbsp;&nbsp;&nbsp";
//         }else
//         {
//             echo $i ." ";
//         }
//     }
//     echo "<br>";
//}
// for ($i=1; $i <=5; $i++)
// { 
//     for ($j=5; $j >=1; $j--) { 
//         if($j >$i)
//         {
//             echo "&nbsp;&nbsp;&nbsp";
//         }else
//         {
//             echo $i ."&nbsp;&nbsp ";
//         }
//     }
//     echo "<br>";
// }
// $a =1;
// for ($i=1; $i <=5 ; $i++) 
// {
//     echo $a;
//     $a = ($a * 11);
//     echo "<br>";

// }
function num($unit)
{
    $a =($unit * 6);
    if(($unit >=1) && ($unit <=50))
    {
        $a =" ";
    }elseif(($unit >50) && ($unit <=150))
    {
        $a =($unit*5)+50;    
    }elseif(($unit >150) && ($unit <=250))
    {
        $a =($unit*4)+200;
    }elseif($unit >250)
    {
        $a =($unit*3)+450;
    }else
    {
        $a= " ";
    }
    return"Amount of $unit unit =".$a;
}

echo num(300);

// for ($i= 65; $i <= 90; $i++)
// { 
//     echo chr($i). " ";
// }
// function num($a)
// {

//     for ($i = 1; $i <= $a; $i++)
//        {
//              $a = ""; 
//         for ($j = 1; $j <= 5; $j++) {
//             $i * $a;
//         }
//     }
//     return $a;
// }
// echo num(2)



    ?>