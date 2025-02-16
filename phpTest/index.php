<?php
///1 //
$year = 2013;

if ($year % 4 == 0 ) {
    echo "This year is a leap year.<br>";
} else {
    echo "This year is not a leap year.<br>";
}

//2//
function Season($temperature) {
    if($temperature < 20){
        echo "We are in winter.<br>";
    } else {
        echo "We are in summer.<br>";
    }
}
Season(27);

//3//
function sum($a, $b) {
    if ($a == $b) {
        echo ($a + $b) * 3 ."<br>";
    } else {
        echo $a + $b  ."<br>";
    }
}
sum(5, 5);

//4//
function sumOrTriple($a1, $b1) {
    if ($a1+$b1==30) {
        echo ($a1 + $b1)  ."<br>";
    } else {
        echo "false . <br>";
    }
}
sumOrTriple(10, 10);

//5//
function MultipleOfThree($number) {
    if ($number % 3 == 0) {
        echo "True<br>";
    } else {
        echo "False<br>";
    }
}
  MultipleOfThree(20);

//6//
function isRange($number1) {
    if ($number1 >= 20 && $number1 <= 50) {
        echo "True<br>";
    } else {
        echo "False<br>";
    }
  }
     isRange(50);

 //7// 
 function largest($num1, $num2, $num3) {
    if ($num1 >= $num2 && $num1 >= $num3) {
        echo $num1 . "<br>";
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        echo $num2 . "<br>";
    } else {
        echo $num3 . "<br>";
    }
}
largest(1, 5, 9);

 //8//





//9//


//10//
function Vote($x) {
    if ($x >= 18) {
        echo "You can vote<br>";
        } else {
            echo "is no eligible to vote<br>";
            }
}
Vote(15);


//11//
function checkNumberType($number1) {
    if ($number1 > 0) {
        echo 'Positive.<br>';
    } else if ($number1 < 0) {
        echo 'Negative.<br>';
    } else {
       echo 'Zero.<br>';
    }
}
 checkNumberType(-5);


 //12//



































?>