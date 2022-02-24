<?php

//variable declaration
$name = 'feisal';
$age = 24;

//constant
define('HOBBY', 'Coding');

//concatination
//concat by using .
//interpolate by using double braces


$firstName = 'Abdi';
$secnd = 'Feisal';


//string functions 
//strlen()
//strtoupper()
//strtolower()
//str_replace()

//number functions 
//floor()
//ceil()
//pi()

//arrays 
//indexed arrays
//create array by calling array function or by []
//count function counts number of elements
//print_r functions prints readable version of the array
//array_push() adds an element to the end of the array
//array_merge() merges two arrays 

$names = ['feisal', 'mohamed', 'ibrahim', 'php'];

// echo $names[3];

// $names2 = array("feisal", "python", "js");
// echo $names2[0];

// array_push($names, "added");
// print_r($names);
// echo count($names);
// echo count($names2)


//associative arrays = (key=>value)

$names4 = ['student1' => "feisal", 'student2' => 'mohamed', 'student3' => 'ibrahim'];

// echo $names4['student3'];

$names4['student4'] = 'Noor';

// for ($i=0; $i < count($names); $i++ ){
//   echo $names[$i] . "<br/>";
// }

$students = [
  ['student' => "feisal", 'grade' => 70, 'age' => '18'],
  ['student' => "mohamed", 'grade' => 60, 'age' => '19'],
  ['student' => "ibrahim", 'grade' => 50, 'age' => '20'],
  ['student' => "feiz", 'grade' => 80, 'age' => '21'],
];


$name = "feisal";

//functions 
function sayHello($name)
{
  $name = "Mohamed";
  echo "Hello $name";
}
function computeSum($number1, $number2, $total = 0)
{
  $sum =  $number1 + $number2 + $total;
  return $sum;
}
// foreach($students as $student){
//   sayHello($student['student']);
//   echo "<br/>";


// }

sayHello($name);
echo "$name";

$prevSum = computeSum(20, 30);
$newSum = computeSum(20, 80, $prevSum);

echo "the previous sum is $prevSum";
echo "<br/>";
echo "The new sum is $newSum";



//conditions

// $price=40;

// if ($price >70){
//   echo "$price is greater than 30";
// }
// else{
//   echo "$price is smaller than 70";

// }
// foreach($students as $student){
//   echo strtoupper($student['student']) . '  The Grade is ' . strtoupper($student['grade']) . "<br/>";
// }
// while ($i < count($students)) {
//   echo $students[$i]['student'];
//   echo "<br/>";

//   $i++;
// }

// echo $names4['student4'];

// print_r($names4);

// for($i=1;$i<=10 ; $i++){
//   echo "Hello World $i/n";
// }



//multidimentional array

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php doc</title>
</head>

<body>
  <!-- <h1>

    <?php
    echo $name;
    echo  $age;
    echo HOBBY;
    ?>


  </h1> -->

  <h2>
    <?php echo "My name is  $firstName  $secnd"; ?>
  </h2>

  <ul>
    <?php foreach ($students as $student) { ?>
      <?php if ($student['grade'] < 70) { ?>
        <li>Name: <?php echo $student['student']; ?></li>
        <li> Grade: <?php echo strtoupper($student['grade']); ?></li>
      <?php } ?>

    <?php } ?>
  </ul>
  <?php include("content.php") ?>
  <?php include("content.php") ?>
  <?php include("content.php") ?>

</body>

</html>