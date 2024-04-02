<?php
// $a = ["a" => "ram", "b" => "ramesh", "c" => "lokesh"];

// // echo "<pre>";
// // print_r($a);

// $num = json_encode($a);
// $nums = json_decode($num);
// $data = implode($nums);
// print_r($data);
// // echo ($nums);
// echo "<br>";
// // print_r($num);

// class Fruit
// {
//     public $name,$colr;
//     function __construct($nam,$color)
//     {
//         $this->name = $nam;
//         $this->colr = $color;
//     }
//     function get_name()
//     {
//         return $this->name;
//     }
//     function get_colr()
//     {
//         return $this->colr;
//     }
// }

// $fal = new Fruit("banana","red");

// echo $fal->get_name();
// echo "<br>";
// echo $fal->get_colr();

// class preson
// {
//     public $name = "NO ", $age = "YEES";
//     function show()
//     {
//         echo $this ->name." ". $this->age;

//     }
// }
// $nam = new preson();
//$nam->name ="";
//$nam->age = 30;

// $nam->show();
// class table
// {
//     public $nam = 0;
//     function __construct($number)
//     {
//         $this->num = $number;
//     }
//     public function onetable()
//     {
//         $a = "";
//         for ($i = 1; $i <= $this->num; $i++) {
//             for ($j = 1; $j <= $i; $j++) {
//                 $a .= $j;
//             }
//             $a .= "<br>";
//         }
//         return $a;
//     }
// public function twotable()
// {
//     $a ="";
//     for ($i=1; $i <=$this->num;$i++)
//     { 
//         for ($j=1; $j <=$i ; $j++)
//         { 
//             $a .= $i;
//         }
//         //$a.="<br>";
//     }
//     return $a;
// }
// function __destruct()
// {
//     $this->num = 1;
//     //echo $this->num;
// }
//}
//$table1 = new table(6);
//$table2 = new table(2);

//echo $table1->onetable();
//echo $table1->twotable();

// class pyramid
// {
//     public $count = 0;
//     function __construct($noo)
//     {
//         $this->count = $noo;
//     }
//     private function stOne()
//     {
//         $a = "";
//         for ($i = 1; $i <= $this->count; $i++) {
//             for ($j = 1; $j <= $i; $j++) {
//                 $a .= $j."";
//             }
//             $a .= "<br>";
//         }
//         return $a;
//     }

// }
// class Tables extends pyramid
// {
//     private $tabl = 0;
//     function __construct($noo)
//     {
//         $this->tabl = $noo;
//         parent::__construct($noo);

//     }
//     function getTable()
//     {
//         return $this->tableof();
//     }
//     function getStructrue()
//     {
//         //return $this->stone();
//         return self::statfunct();
//     }
//     protected function tableof()
//     {
//         $output = "";
//         for ($i = 1; $i <= 10; $i++) {
//             $output .= $i * $this->tabl . "<br>";
//         }
//         return $output;
//     }
//     public static function statFunct()
//     {
//         return "this is static function";
//     }
// }

//  //echo Tables::statFunct();
// $tabObj1 = new Tables(6);
// //echo $tabObj1->tabl;

// echo $tabObj1->getTable();

// //echo $tabObj1->getStructrue();

// class employee
// {
//     public $name, $age, $salary;
//     function __construct($n, $a, $s)
//     {
//         $this->name = $n;
//         $this->age = $a;
//         $this->salary = $s;

//     }
//         function info()
//         {
//             echo "<h6>Employee profile</h6>"."<br>";
//             echo "employee name :" . $this->name . "<br>";
//             echo "employee age :" . $this->age . "<br>";
//             echo "employee salary :" . $this->salary . "<br>";
//         }


// }
// class manager extends employee
// {
// public $ta = 1000, $phone = 666, $totalSalary;


//     function infoo()
//     {
//         $this->totalSalary = $this->salary + $this->ta + $this->phone;  
//         echo "<h2>Employee profile</h2>"."<br>";
//         echo "employee name :" . $this->name . "<br>";
//         echo "employee age :" . $this->age . "<br>";
//         echo "employee salary :" . $this->totalSalary . "<br>";
//     }
// }


// $a = new manager("Ram", 20, 2000);
// $b = new employee("rajesh" ,30, 1500);

// $a->infoo();
// $b->info();



// $a="amit";
// $$a="hemu";
// // $amit="hemu";
// echo "$amit";

// echo"<br>";
// echo 'ram ';
// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo $j . " ";
//     }
//     echo "<br>"; // New line after each row
// }
// echo "<br>";
// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 4; $j >= $i; $j--) {
//         echo "&nbsp&nbsp";
//     }
//     for ($k = 1; $k <= $i; $k++) {
//         echo "*";
//     }
//     echo "<br>"; // New line after each row
// }
// echo "<br>";
// echo "<br>";
// for ($i = 5; $i >= 1; $i--) {
//     for ($j = 4; $j >= $i; $j--) {
//         echo "&nbsp&nbsp";
//     }
//     for ($k = 1; $k <= $i; $k++) {
//         echo "*";
//     }
//     echo "<br>"; // New line after each row
// }
// echo "<br>";
// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 2; $j <= $i; $j++) {
//         echo " &nbsp";
//     }
//     for ($k = 1; $k <= 6 - $i; $k++) {
//         echo " "."*";
//     }
//     echo "<br>"; // New line after each row
// }
// echo "<br>";
// echo "<br>";
// $a = 5;
// for ($i=1; $i <= $a ; $i++) { 
//     for ($j= $a-$i; $j >0 ; $j--) { 
//         echo " &nbsp&nbsp";

//     }
//     for ($k = 1; $k <= $i * 2 - 1; $k++) {
//         echo "* ";
//     }
//     echo "<br>"; // New line after each row

// }
// echo "<br>";
// echo "<br>";
// for ($i=1; $i <=10; $i++) { 
//     for ($j=1; $j<=10; $j++) { 
//         # code...
//         echo $i*$j."&nbsp";  
//     }
//     echo "<br>";
// }
// echo "<br>";
// echo "<br>";
// $data = 9;
// while ($data <=10){
//         echo $data*2;
//         $data++;
//         echo "<br>";
// }

// class calculation {
//     public $age;
//     public $limit;
//     public $number;
//     function __construct($age,$limit,$number){
//         $this->age = $age;
//         $this->limit = $limit;
//         $this->number = $number;
//     }
//     function getdata(){
//       return  $this->age;
//     }
//     function getname(){
//         return  $this->limit;
//       }
// }
// class 
// $obj = new calculation("12","hemat","1234");
// echo $obj->age;
// echo "<br>";
// echo $obj->getname();

// class calculate {
//    public $a, $b, $c;

//    public function sum (){
//     $this->c = $this->a+ $this->b;
//     return $this->c;
//    }

//    public function sub (){
//     $this->c = $this->a - $this->b;
//     return $this->c;
//    }
// }
// $obj1 = new calculate();
// $obj1->a=10;
// $obj1->b=30;
// // $obj1->c=20;

// $obj2 = new calculate();
// $obj2->a=10;
// $obj2->b=60;
// // $obj2->c=20;

// echo $obj1->sum();
// echo "<br>";
// echo $obj2->sub();
// echo "<br>";
// echo $obj2->sum();

// class person
// {
//     public $name;
//     public $age;

//     // function __construct ($name="no name",$age=0){
//     //    return $this->name= $name;
//     //    return $this->age= $age;   
//     // }
//     function show()
//     {
//         echo $this->name.$this->age;
//     }
    
// }


// $obj = new person();
//  $obj->show("hemant",20);
//   $obj->show("hemant",20);
//   $obj->show("hemant",20);
//   $obj->show("hemant",20);







// $obj->name ="asdfg";
// $obj->age ="22";
// $obj->show();

// $obj1 = new person();
// $obj1->name ="fg";
// $obj1->age ="22";
// $obj1->show();

// $obj = new person();
// $obj1 = new person("manish", 67);
// $obj2 = new person("kamal", 80);

// $obj->show();
// $obj1->show();
// $obj2->show();
// class person{

//     public $name;
//     public $age;
//     public $limit;
//     function show($name ,$age,$limit){
//        return $this->name = $name.$this->age = $age.$this->limit = $limit;
       
//     }
//     function __construct($limit,$age=0){
//          $this->limit= $limit;
//          $this->age= $age;
//         // return $this->age= $age;
//     }

// }
// $names = new person(19);
// echo  $names->age;
// echo $names->show("hemant",20,60);
// echo "<br>";
// echo $names->show("amit",20,45);
// echo "<br>";
// echo $names->name;

// switch ("7"){
//     case 1: 
//         echo "monday";
//         break;
//         case 2:  echo"sunady";
//         break;
//         case 7: echo"tuesgsg";
//         break;

//         default;
//         echo "deahdhd";
// }

