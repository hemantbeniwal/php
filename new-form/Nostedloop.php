<!DOCTYPE html>
<html lang="en">
<style>
    
</style>
</html>
















<?php

// for($i =1; $i <=5; $i++)
// {
//     for($j =1; $j <=5; $j++ ){
//         echo $i;
//     } echo "<br>";
// }

// for($i =1; $i <=5; $i++)
// {
//     for($j =1; $j <=5; $j++){
//         echo $j;
//     }echo "<br>";
  
//}
// for($i =1; $i <=5; $i++)
// {
//     for($j =1; $j <=$i; $j++){
//         echo $i;
//     }
//     echo "<br>";

//  }

// for ($i=1; $i <=5; $i++) { 
//     for ($j=1; $j <=$i ; $j++) { 
//         echo $j;
//     }echo "<br>";
// }
// for ($i=5; $i >=1 ; $i--) 
// { //55555
//     for ($j=1; $j <=$i ; $j++) 
//     { //4444
//         echo $i;
//     }echo "<br>";
// }

// for ($i=1; $i <=5; $i++) 
// { 
//     for ($j=5; $j >=$i ; $j--) 
//     { 
//         echo $j;
//     }
//     echo "<br>";
// }
// for ($i=5; $i >=1 ; $i--) { 
//     for ($j=5; $j >=$i; $j--) {
//         echo $j; 
//     }echo "<br>";
// }
// 5
// 54
// 543
// 5432
// 54321
// $a =1;
// $a =5;
// for ($i=1; $i <=4 ; $i++) { 
//     for ($j=1; $j <=$i; $j++) 
//     { 
//         echo $a." ";
//         $a++;
//     }
//     echo "<br>";
// }
// 1
// 2 3
// 4 5 6
// 7 8 9 10

// for ($i=5; $i >=1 ; $i--) { 
//     for ($j=$i; $j >=1 ; $j--) { 
//         echo $j;
//     }echo "<br>";
// }
// 54321
// 4321
// 321
// 21
// 1

for ($i=1; $i <=5 ; $i++)
{
    for ($j=0; $j <=4 ; $j++) { 
        echo ($i + $j)%2;
    }echo "<br>";
}
// 10101
// 01010
// 10101
// 01010
// 10101

//for ($i=0; $i <=4 ; $i++) 
// { 
//     for ($j=0; $j <=$i ; $j++)
//     { 
//         echo ($i+$j+1) %2;
//     } 
//     echo "<br>";
// }
// 1
// 01
// 101
// 0101
// 10101

// $num =1;
// for ($i=$num; $i <=10 ; $i++) { 
//     $fact =1;
//     for ($j=1; $j <=$i ; $j++) { 
//         $fact =$fact*$j;
//     } echo "factorial of $num is".$fact;
//     $num++;
//     echo "<br>";
// }
// factorial of 1 is1
// factorial of 2 is2
// factorial of 3 is6
// factorial of 4 is24
// factorial of 5 is120
// factorial of 6 is720
// factorial of 7 is5040
// factorial of 8 is40320
// factorial of 9 is362880
// factorial of 10 is3628800
// * * * * * * * * *
// * * * *   * * * *
// * * *       * * *
// * *           * *
// *               *
// * *           * *
// * * *       * * *
// * * * *   * * * *
// * * * * * * * * *

// for ($i = 1; $i <= 9; $i++)
// {
//     for($j = 1; $j <= 9; $j++)
//     {
//         if(($i == 2 && $j == 5) || ($i == 3 && $j > 3 && $j < 7))
//         {
//             echo "&nbsp;&nbsp;&nbsp;";

//         }elseif(($i == 4 && $j > 2 && $j < 8) || ($i == 5 && $j > 1 && $j < 9))
//         {
//             echo "&nbsp;&nbsp;&nbsp;";

//         }elseif(($i == 6 && $j > 2 && $j < 8) || ($i == 7 && $j > 3 && $j < 7))
//         {
//             echo "&nbsp;&nbsp;&nbsp;";

//         }elseif($i == 8 && $j == 5)
//         {
//             echo "&nbsp;&nbsp;&nbsp;";                           
//         }else
//         {
//             echo "* ";
//         }

//     } 
//     echo "<br>";
// }
// for ($i=1; $i <=8 ; $i++)
// {
//     for ($j=1; $j <=9 ; $j++) { 
//         if(($i==1 && $j==1) || ($i==1 && $j==9)||($i == 2 && $j > 1 && $j < 9) || ($i == 3 && $j > 1 && $j  < 9))
//         {
//             echo "&nbsp;&nbsp;&nbsp;";
//         }elseif(($i ==  4 && $j > 1 && $j < 9) || ($i == 6 && $j > 1 && $j < 9 ))
//         {
//             echo "&nbsp;&nbsp;&nbsp;";
//         }elseif(($i == 7 && $j > 1 && $j <9) || ($i == 8 && $j > 1 && $j < 9))
//         {
//             echo "&nbsp;&nbsp;&nbsp;";
//         }else {
//             echo "* ";
//         }
//     } echo "<br>";   //A 
// } 

// * * * * * * * *    
// *               *
// *               *
// * * * * * * * *    
// *               *
// *               *
// * * * * * * * *  
   
// for($i = 1; $i <= 7; $i++)
// {
//     for ($j = 1; $j <= 9 ; $j++)  
//     {
//         if(($i == 1 && $j == 9) || ($i == 2 && $j > 1 && $j < 9) || ($i == 3 && $j > 1 && $j < 9 ))
//         {
//             echo "&nbsp;&nbsp;&nbsp;";
//         }elseif(($i == 4 && $j == 9 ) || ($i == 5 && $j > 1 && $j < 9) )
//         {
//             echo "&nbsp;&nbsp;&nbsp;";
//         }elseif(($i ==6 && $j > 1 && $j < 9) ||($i == 7 && $j ==9))
//         {
//             echo "&nbsp;&nbsp;&nbsp;";
//         }else
//         {
//             echo "* ";
//         }
//     } echo "<br>";   
    
// }
// * * * * * *    
// *                   *
// *                      
// *                      
// *                      
// *                   *
//    * * * * * *   

// for ($i = 1; $i <= 7 ; $i++)
// {
//     for ($j=1; $j <= 8; $j++)
//     {
//         if(($i == 1 && $j == 1) ||($i == 1 && $j == 8) || ($i == 2 && $j >1 && $j <8) || ($i ==3 && $j >1))
//         {
//             echo "&nbsp;&nbsp;&nbsp;";
//         }elseif(($i == 4 && $j >1) || ($i == 5 && $j > 1) || ($i == 6 && $j > 1 && $j < 8))
//         {
//             echo "&nbsp;&nbsp;&nbsp;";
//         }elseif(($i == 7 && $j == 1) || ($i == 7 && $j == 8))
//         {
//             echo "&nbsp;&nbsp;&nbsp;";
//         }else
//         {
//             echo "* ";
//         }
//     } echo "<br>";
// } 
   
// * * * * * *    
// *           *
// *           *
// *           *
// *           *
// *           *
// * * * * * * 

// for ($i=1; $i <= 7 ; $i++)
// {
//     for ($j=1; $j <= 7 ; $j++)
//     {
//         if(($i == 1 && $j == 7) || ($i == 2 && $j > 1 && $j < 7) || ($i ==3 && $j > 1 && $j < 7))
//         {
//             echo "&nbsp;&nbsp;&nbsp;";
//         }elseif(($i == 4 && $j > 1 && $j < 7) || ($i == 5 && $j > 1 && $j < 7))
//         {
//             echo "&nbsp;&nbsp;&nbsp;";
//         }elseif(($i == 6 && $j > 1 && $j <7) || ($i == 7 && $j == 7))
//         {
//             echo "&nbsp;&nbsp;&nbsp;";
//         }else
//         {
//             echo "* ";
//         }
//     } echo "<br>";
// // } 
// 2 3 5 7 11 13 17 19 23 29 31 37 41 43 47 53 59 61 67 71 73 79 83 89 97
    
// for($i =2; $i <=100; $i++)
// {       $prime = true;
//     for ($j=2; $j <$i; $j++)
//     {
//         if($i % $j ==0)
//         {
//             $prime =false;
//             break;
//         }
    
    
//     } if($prime)
//     {
//         echo $i. " ";
//     }
// }
// $a =1;

// for ($i=1; $i <=5 ; $i++)
// {
//     for ($j=1; $j <=$i ; $j++)
//     {
//         echo $a." ";
        
//     }echo $a++. "<br>";
        
    
// }
// $a =4;
// for ($i=6; $i <=10 ; $i+=2) { 
//     echo "$a - $i";
//     $a +=2;
    
//     echo "<br>";
// }

// for ($i=1; $i <=10; $i++)
// { 
//     for ($j=1; $j <=10; $j++)
//     { 
//         if($i+=$j){
//             echo$i;
//         }echo "<br>";
//     }
// }
// for ($i=1; $i <=5; $i++)
// { 
//     $a =1;
//     for ($j=1; $j<=$i ; $j++) 
//     {
//         echo $a. " ";
//         $a =$a*($i-$j)/$j;
//     }
//     echo "<br>";
// }

// for ($i=1; $i <=5 ; $i++)
// { 
//     for ($j=1; $j <=$i; $j++)
//     { 
//         echo $j . " ";
//     }
//     echo "<br>";
// }

// for ($i=5; $i <=5 ; $i--)
// { 
//     for ($j=1; $j <=$i ; $j++)
//     { 
//         echo $j. " ";
//     }
//     echo "<br>";
// }





    
?>








