<?php
// $num = [
//     10,
//     20,
//     30
// ];
// for ($i = 0; $i < count($num) ; $i++)
// { 
//     echo $num[$i]. " ";
// }

// $input = [10, 30, 15, 45, 44, 20];

// $output = $input[4];
// for ($i=0; $i <count($input) ; $i++)
// { 
//     if($input[$i]>$output)
//     {
//         $output=$input[$i];
//     }
// }echo $output;
// $input = [
//     [10, 20, 30],
//     [40,50],
//     [60, 70, 80]
// ];
// $a =$input[0][0];
// $b =$a + $input[0][1];
// $c =$b + $input[0][2];

// echo $c;
// $a = $input[1][0];
// $b = $a + $input[1][1];
// echo "<br>";
// echo $b;
// $a = $input[2][0];
// $b = $a + $input[2][1];
// $c = $b + $input[2][2];
// echo "<br>";
// echo $c;

// $input = [
//     [10, 20, 30],
//     [40, 50, 60],
//     [60, 70, 80]
// ];

// $a =$input[0][0] +$input[1][0] + $input[2][0];
// $b =$input[0][1] +$input[1][1] + $input[2][1];
// $c =$input[0][2] +$input[1][2] + $input[2][2];

// $output =[
//     $a,
//     $b,
//     $c
// ];
// echo "<pre>";
// print_r($output);

// $input = [
//          [10, 20, 30],
//          [40,50],
//         [60, 70, 80]
//      ];
// for ($i=0; $i <count($input[0]); $i++)
// {
//     if($a = $input[$i]);
// }
  
// print_r($a);
// echo "<br>";

/*Array
(
    [0] => 110
    [1] => 140
    [2] => 170
)*/

// $input = [
//     [10, 20, 30],//(0,1,2 indax) 
//     [40, 50, 60],
//     [60, 70, 80]
// ];
// $output = [];

// for ($i=0; $i <count($input[0]); $i++)
// { 
//     $output[$i] = $input[0][$i] + $input[1][$i] + $input[2][$i];
// }
// echo "<pre>";
// print_r($output);

// $input = [
//     [10, 20, 30],
//     [40, 50, 60],
//     [60, 70, 80],
// ];
// $output = [];

// for ($i=0; $i <count($input[0]); $i++)
// {
//     for($j =0; $j<count($input[$i]); $j++)
//     {
//        if($output[] = $input[$j][$j]); 
//     }
// }
// echo "<br>";
// print_r($output);
//********************************** */

// $a = [10, 20, 30, 40];
// $b = [40, 50, 60, 60];

// $c = [];
// for($i = 0; $i < count($a); $i++)
// {
//     $c[]= $a[$i] + $b[$i];
// }

// echo "<pre>";
// print_r($c);

// $c = [50, 70, 90];


// --------------------------------------------------------------------------------

// $a = [
//     [10, 20, 30, 40],
//     [50, 60, 70, 80]
// ];
// // $c = [60, 80, 100, 120, 90]
// //echo "<pre>";

// //echo "---------------------------";
// $c = [];
// for($i = 0; $i < count($a); $i++)
// {
//     $sVal = $a[$i];
//     for($j = 0; $j < count($sVal); $j++)
//     {
//        // echo $a[$i][$j]." ";
//         $c[$j]= ($c[$j]??0) + $a[$i][$j];
//     }
//     //break;
// }
// echo "<pre>";
// print_r($c);


// ------------------------------------------------------------------------------------




// $input = [100, 90, 80, 70, 60];

// // $output = [10, 20, 30, 40, 60];

// // echo implode(" ", $input); echo "<br><br>";
// echo "<pre>";
// $n = count($input);
// for($i=0; $i < $n-1; $i++) // 4
// {
//     for($j=0; $j < $n-1; $j++)
//     {
//         if($input[$j] > $input[$j+1])
//         {
//             $temp = $input[$j+1];
//             $input[$j+1] = $input[$j];
//             $input[$j]= $temp;
//             //print_r($input);
//             //echo implode(" ", $input); echo "<br>";
//         }
//     }
//     //echo "--------<br>";
//     //print_r($input);
// }
// print_r($input);


// ------------------------------------------------------------------------------------




// $num = [10, 20, 30];
// echo "<pre>";
// print_r($num);


// --------------------------------------------------------------------------


// $input = [
//     [10, 20, 30],
//     [40, 50],
//     [60, 70, 80]
// ];
// // $output = [60, 90, 210];
// // $c = [];
// for ($i=0; $i < count($input); $i++) 
// { 
//     $sum = 0;
//     $sVal = $input[$i];
//     for ($j=0; $j < count($sVal); $j++)
//     { 
//         $sum+= $input[$i][$j];
//     }
//     $sume[] = $sum;
// }
// echo "<pre>";
// print_r($sume);



// $output = [
//     [80, 100, 120],
//     [100, 90, 110],
//     [60, 30, 120]
// ];
// $a = [
//     [10, 20, 30],
//     [60, 40, 50],
//     [50, 10, 90]
// ];
// $b = [
//     [70, 80, 90],
//     [40, 50, 60],
//     [10, 20, 30]
// ];
// $output = [];
// for ($i=0; $i < count($a) ; $i++)
// { 
//     $c = $a[$i];
//     for ($j=0; $j < count($c); $j++)
//     { 
//         $output[$i][$j] = $a[$i][$j] + $b[$i][$j];
//     }    
// }echo "<pre>";
// print_r($output);


// $input = [
//     [20, 30, 40],
//     [50, 60],
//     [60, 70, 80]
// ];
// $output = [];

// for($i = 0; $i < count($input); $i++)
// {
//     $a = $input[$i];
//     $b = 0;
//     for ($j = 0; $j < count($a) ; $j++)
//     { 
//         $b += $input[$i][$j];

//     }
//     $output[] = $b;
// }echo "<pre>";
// print_r($output);

//[2, 4, 6, 8, 10,......20]
//[3, 6, 9, 15, 18,.....30]
//[4, 8, 12, 16, 20,.....40]

// $a = [];
// $b = 1;

// for ($i=0; $i < 3; $i++)
// { 
//     $b++;
//     for ($j = 1; $j <=10; $j++)
//     { 
        
//       $a[$i][$j] = $b * $j;
//     }  
// }echo "<pre>";
// print_r($a);


$nos =[
    [10, 20, 30, 40, 50],
    [20, 30, 40, 50, 60]
];

$output = [];
foreach ($nos as $i => $sVal)
{
    foreach($sVal as $j => $val)
    {
        $output[$j] = ($output[$j]??0) + $val;
    }
}
echo "<pre>";
print_r($output);

$students = [
    ["name" => "student 1", "age" => 20, "class" => "PHP"],
    ["name" => "student 2", "age" => 23, "class" => "PHP-1"],
    ["name" => "student 3", "age" => 25, "class" => "PHP-2"],
    ["name" => "student 4", "age" => 27, "class" => "PHP-3"],
 ];
 ?>
 <table border="1"cellspacing="0"width="500">
     <tr>
        <th>Sr.</th>
         <th>Name</th>
         <th>Age</th>
        <th>Class</th>
        
    </tr>  
    <?php
    foreach($students as $key => $_student)
    {
        echo "<tr>";
        echo "<td>".($key+1)."</td>";
        echo "<td>".$_student["name"]."</td>";
        echo "<td>".$_student["age"]."</td>";
        echo "<td>".$_student["class"]."</td>";
    }  
        ?>
     </table>
 echo "<pre>";
     print_r($students);
     <?php

// $input = [
//     [10, 20, 30],
//     [40, 50],
//     [60, 70, 80],
//     [10, 30, 40,10]
// ];
// $output =[];
// foreach($input as $i => $num)
// //echo $i. "<br>";
// {
//     foreach($num as $j => $count)
//     //echo $j. "<br>";
//     {
//         $output[$i] = ($output[$i]??0) + $count;
//     }
// }
// echo "<pre>";
// print_r($output);

// $colors = ["red", "blue", "green", "blue", "yellow", "blue"];

// $targetcolor =  "red";
// $num =0;
// //Output = "the color blue appears 3 time.";
// foreach($colors as $col)
// {
//     if($col == $targetcolor)
//     {
//         $num++;
//     }

// }
// print_r("the color $targetcolor appears $num time")


//output =[10,20,30,40,60]
$input = [10, 20, "10", 30, "20", 50, 60, 10, "30"];
$num =10;

$b = 0;

foreach($input as $a)
{
    if($a === $num)
    {
        $b++;
    }
    

}echo $b;

$grades = [85, 92, 78, 88, 90];//86.6


$c =0;
$a = count($grades);
foreach($grades as $b)
{
    $c += $b;
}
echo " Average Grades" ." ". $c/$a;
echo "<br>";
echo "<br>";
$numbers = [45, 17, 32, 88, 5, 72];
//output:
//Maximum value:88
//minimum Value 5
$max = $min = $numbers[0];
foreach($numbers as  $num)
{
    if($num > $max)
    {
        $max =$num;
    }
    if($num < $min)
    {
        $min =$num;
    }
}
echo "maximum value $max";
echo "<br>";
echo "minimum value $min";




////////////////////////////////////////////////////////////////////////////
//Calculate Average Grades
$grades = array(85, 92, 78, 88, 90);
$sum = 0;
foreach ($grades as $avg) {
	$sum += $avg;
}
echo " Average grades is " . $sum / count($grades);

echo "<br>";
//Find the Maximum and Minimum Values in one solutions:

$numbers = array(45, 17, 32, 88, 5, 72);

//Output:=Maximum value: 88..,,Minimum value: 5

$max = $min = $numbers[0];
// echo $max;
// "<br>"
foreach ($numbers as $num) {
	if ($max < $num) {
		echo $max = $num;
	}
	if ($min > $num) {
		$min = $num;
	}
}
echo "maximum value is $max" . "<br>";
echo "minimum value is $min";

echo "<br>";
echo "<br>";

//Counting Occurrences of Elements
$items = array("Apple", "Banana", "Orange", "Apple", "Banana", "Mango", "Apple");

/*$output = [
	"Apple" => 3,
	"Banana" => 2,
	"Orange" => 1,
	"Mango" => 1
// ]*/
// $output = [];
// foreach ($items as $item) {
    
// 	if (($output[$item])??0) {
    
// 		$output[$item]++;
// 	}
//      else {
// 		$output[$item] = 1;
// 	}
// }
// print_r($output);

// echo "<br>";
// echo "<br>";

// $words = array("Hello", "world", "in", "PHP");

// $output = implode(', ', $words);

// echo $output;;


// $words = ["Hello", "world", "in", "PHP"];

// $output = " ";

// foreach ($words as $word) {
// 	$output .= $word . ', ';
// }
// $output = rtrim($output, ', ');

// echo "Concatenated String:".$output;
// $a = [];
// for ($i=1; $i <=10 ; $i++) 
// { 
//     $a[]=$i;
// }
// print_r($a);



 ?> 
