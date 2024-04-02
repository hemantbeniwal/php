Conditional Statement<br>
<?php
//  1 - 50 -- 6
//  51 - 150 -- 5
//  151 - 250 - 4
//  251 - .... - 3
// if
// if else
// if elseif ..... else // 
// switch

// $a = 95;
// $b = 80;
// $c = 100;
// $d = 90;

// if(($a > $b) && ($a > $c) && ($a > $d)) {
//     echo "A is Big";
// } else if($b > $c && $b > $d) {
//     echo "B is big";
// } else if($c > $d) {
//     echo "C is big";
// } else {
//     echo "D is big";
// }


$a =280;

if(($a >= 1) && ($a <= 50)) {
    echo "total amount is" .$a*6;
} else if(($a>=51) && ($a<=150)) {
    $b = $a-50;
    $c = $b*5;
    echo "total" .$c+50*6;

}
 else if(($a>=151) && ($a<=250)) {
    $d = $a-150;
    $e = $d*4;
    echo "total" .$e+100*5+50*6;
 } else if ($a >250) {
    $f = $a-250;
    $g = $f*3;
    echo "total" .$g+100*4+100*5+50*6;
 }



// $a = 70;
// $b = 60;
// $c = 50;
// if($a > $b && $a > $c) {
//     echo "A is Big";
// } else if($b > $c) {
//     echo "B is big";
// } else {
//     echo "C is big";
// }


// if(false) {
//     echo "Step 1";
// } else if(false) {
//     echo "Step 2";
// } else if(false) {
//     echo "Step 3";
// } else if(false) {
//     echo "Step 4";
// } else {
//     echo "Else part";
// }



// $a = 15;
// $b = 20;

//$age = 17;
//echo ($age >= 18 && $age <= 100)?"Elg":"Not Elg";

//$age = 99;
// if($age >= 18 && $age <= 100) {
//     echo "Eligible for vote";
// } else {
//     echo "Not Eligible for vote";
// }

// if($a > $b) {
//     echo "A is big";
// }
echo "<br>";

// $a =40;
// $b =50;
// $c =60;
//  if(($a > $b) && ($a > $c))
//  {
//     echo "A is big";
//  }elseif($b > $c)
//  {
//     echo "B is big";
//  }else
//  {
//     echo "c is big";
//  }
// $a = 60;

// if(($a >=1) && ($a <=50))
// {
//     echo $a * 6 ;
// }elseif(($a >50) && ($a <=150))
// {
//     echo $a * 5+50;
// }


$age = 19;
$ismember = "yes";

if(($age >=18) && ($age <65) && ($ismember == "yes")) 
{
   echo "you are eligible for a 10% discount";
} else if(($age >65) && ($ismember == "yes")) 
{
   echo "you are eligible for a 15% discuont";
} else 
{
  echo "you are not eligible for not discount";
} 














?>