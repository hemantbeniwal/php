<?php

$a= 170;
if(($a>=1) && ($a<=50)) {
   echo $a*6;
} else if(($a>=51) && ($a<=150)){
   echo $a*5+50;
} else if (($a>=151) && ($a<=250)){
   echo $a*4+200;
}

  
$a = 1;
 if($a >=1) {
   echo "Positive";
 }else if (($a <1) && ($a >-1)){
   echo "zero";
 }else {
   echo "Negative";
 }
 
 $a =7;
if($a % 2==0) {
   echo "even";
 }else {
   echo "Odd";
 }      

 $a =90;
 $b =80;
 $c =70;
 $d =10;
 

 if (($a > $b) && ($a > $c) && ($a > $d)) {
    echo "A is big";
 } else if(($b > $c) && ($b > $d)){
   echo "B is big";
 } else if($c > $d) {
   echo "C is big";
 } echo "D is big";

$a =60;
if (($a >=90) && ($a <=100)) {
    echo "A+";
} else if (($a >=80) && ($a <90)) {
    echo "A";
} else if (($a >=70) && ($a <80)) {
    echo "B";
} else if (($a >=60) && ($a <70)) {
    echo "C";
}else if (($a >=50) && ($a <60)){
    echo "D";
} else {
    echo "F";
}

echo "<br>";
$a =2025;
if ($a %400==0){
    echo "Leap year";
} else  {
    echo "Not leap year";
}
// echo "<br>";




$a=0;
if($a>0) {
  echo "positive";
} elseif($a<0) {
  echo "negative";
} else {
  echo "zero";
}

$a =20;
if($a %2==0) {
  echo "even";
}else {
  echo "Odd";
}
$a =70;
$b =60;
$c =80;
$d =90;
$e =100;
$f =120;
if(($a <$b) && ($a <$c) && ($a <$d) && ($a <$e) && ($a <$f)) {
  echo "A small ";
}else if(($b <$c) && ($b <$d) && ($b <$e)) {
  echo "B small";
}else if(($c <$d) && ($c <$e)) {
  echo "C small";
}else if($d <$e) {
  echo "D small";
}else {
  echo "E small";
} 

$a=48;
if(($a >=0) && ($a <=50)) {
  echo $a *6;
}else if (($a >50) && ($a <=150))
  echo (($a*6)+($a ));



echo "<br>";

$a = 14;
$b = 10;
$c = 100;
$d = 12;
$e = 110;

if($a > $b) {
  if($a > $c) {
    if($a > $d) {
      if($a > $e) {
        echo "A is Big 1";
      } else {
        echo "E is Big 1";
      }
    } else {
        if($d > $e) {
       echo "D is big 1"; 
      } else {
          echo "E is big 2";
      }
    }
  } else {
    if($c > $d) {
      if($c > $e) {
        echo "C is big 1";
      } else {
        echo "E is big 3";
      }
      } else {
       if($d > $e) {
        echo "D is big 2";
       } else {
        echo "E is big 4";
       }
      }  
    }
  } else {
    if($b > $c) {
      if($b > $d) {
        if($b > $e) {
          echo "B is big 2";
        } else {
          echo "E is big 5";
        }
      } else {
        if($d > $e) {
          echo "D is big 3";
        } else {
          echo "E is big 6";
        }
      }
    } else {
      if ($c > $d) {
        if($c > $e) {
          echo "C is big 2";
        } else {
          echo "E is big 7";
        }
      } else {
        if ($d > $e) {
          echo "D is big 4";
        } else {
          echo "E is big 8";
        }
      }
    }
  }

$a = "may";

if ($a == "december" || $a == "january" || $a == "february") {
  echo "It,s winter";
} else if($a == "march" || $a == "april" || $a == "may") {
  echo "It's spring";
} else if ($a == "june" || $a == "july" || $a =="august") {
  echo "It's summer";
}else if ($a == "septembar" || $a == "october" || $a == "november") {
  echo "It's autumn (fall).";
}
 

$age = 80;
$ismember = "yes";

if(($age >=18) && ($age <65) && ($ismember == "yes")) {
   echo "you are eligible for a 10% discount";
} else if(($age >65) && ($ismember == "yes")) {
   echo "you are eligible for a 15% discuont";
} else {
  echo "you are not eligible for not discount";
} 
$weight = "8kg";
$c = "ue";

 if($weight < 5) {
  if($c =="us") {
    echo "shipping cost is 5$";
  }else if($c == "canada") {
    echo "shipping cost is 10$";
  }else {
    echo "shipping cost is 15$";
  }
 } else if($weight >= 5) {
  if($c =="us") {
    echo "shipping cost is 10$";
  }else if($c == "canada") {
    echo "shipping cost is 20$";
  }else {
    echo "shipping cost is 30$";
  }
 }
 $a = 20;
 $b = 10;

 $c = $a;
 $a = $b;
 $b = $c;

 echo "$a <br> $b";

$a = 5;
$b = 0.1;

$a=$a+$b;
$b=$a-$b;
$a=$a-$b;

echo "$a <br> $b";

$a = 20;
$b = 10;

$a -= $b;
$b += $a;



?>
