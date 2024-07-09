<?php

// PHP Basic Tasks
// ----------------------- =========== question 1

// for ($x = 1; $x <= 9; $x++) {
//     echo  $x ."-";

//     if($x == 9){
//     $x=10;
//     echo $x ;

// }

// }

// -----------------------=========== question 2

// $sum=0;
// for ($x = 0; $x <= 30; $x++) {
    
//     echo  $x . " ";

//     $sum = $sum + $x;
    
   
   


// }
// echo "<br>";
// echo "<br>";


// echo $sum;

// -----------------------=========== question 3

// $rows = 5;
// $cols = 5;

// for ($i = 0; $i < $rows; $i++) {
//     for ($j = 0; $j < $cols; $j++) {
//         if ($j < $rows - $i - 1) {
//             echo "A " ;
//         } else {
//             echo chr(65 + $i) . "  "; 
//         }
//     }
//     echo "<br>";
// }

// -----------------------=========== question 4
// echo "<br>";
// echo "<br>";
// echo "<br>";
 
// $rows = 5;
// $cols = 5;
// $x= 0 ;
// while($x < $rows ){
// $c=0;
// while($c <$cols ){

//     if ($c < $rows - $x - 1) {
//                     echo 1 . " "  ;
//                 } else {
//                     echo (1 + $x) . "  "; 
//                 }


//     $c++;




// }
// $x++;
// echo "<br>";
// }

// -----------------------=========== question 5
// $rows = 5;
// $cols = 5;

// for ($i = 0; $i < $rows; $i++) {
//     for ($j = 0; $j < $cols; $j++) {
//         if ($i == $j) {
//             echo ($i + 1) . " ";
//         } else {
//             echo "0 ";
//         }
//     }
//     echo "<br>";
// }

// -----------------------=========== question 6
// $number = 5;

// $factorial = 1;

// for ($i = 1; $i <= $number; $i++) {
//     $factorial *= $i;
//     # 1*1 = 1
//     # 1*2 = 2 
//     # 2*3 = 6
//     # 6 * 4 = 24 
//     # 24 * 5 = 120 
    
// }

// echo "The factorial of $number is: $factorial "; # 24 


// -----------------------=========== question 7

// $num = 8;


// $fib = [0, 1];

// for ($i = 2; $i <= $num; $i++) {
//     $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
// }

// for ($i = 0; $i <= $num; $i++) {
//     echo $fib[$i] . " ";
// }


// -----------------------=========== question 8
// $text = "Orange Coding Academy";
// $count = 0;
// $text = strtolower($text);

// for ($i = 0; $i < strlen($text); $i++) {
//     if ($text[$i] == 'c') {
//         $count++;
//     }
// }

// echo $count;

// -----------------------=========== question 9
// echo '<table cellpadding="3px" cellspacing="0px" border="1">';

// for ($i = 1; $i <= 5; $i++) {
//     echo '<tr>';
//     for ($j = 1; $j <= 5; $j++) {
//         echo '<td>';
//         echo "Row $i, Column $j";
//         echo '</td>';
//     }
//     echo '</tr>';
// }

// echo '</table>';

// -----------------------=========== question 10
// for ($i = 1; $i <= 50; $i++) {
//     if ($i % 3 == 0 && $i % 5 == 0) {
//         echo "FizzBuzz ";
//     } elseif ($i % 3 == 0) {
//         echo "Fizz ";
//     } elseif ($i % 5 == 0) {
//         echo "Buzz ";
//     } else {
//         echo $i . " ";
//     }
// }

// -----------------------=========== question 11
// $num = 1;
// $rows = 5; 

// for ($i = 1; $i <= $rows; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo $num . " ";
//         $num++;
//     }
//     echo "<br>";
// }

// -----------------------=========== question 12
// $rows = 5; // Number of rows in the pattern

// // Upper half of the pattern
// for ($i = 0; $i < $rows; $i++) {
//     for ($j = 0; $j <= $i; $j++) {
//         echo chr(65 + $j); // Printing letters A, B, C, ...
//         if ($j < $i) {
//             echo " ";
//         }
//     }
//     echo "<br>";
// }

// // Lower half of the pattern
// for ($i = $rows - 1; $i >= 1; $i--) {
//     for ($j = 0; $j < $i; $j++) {
//         echo chr(65 + $j); // Printing letters A, B, C, ...
//         if ($j < $i - 1) {
//             echo " ";
//         }
//     }
//     echo "<br>";
// }




// array 
// -----------------------=========== question 1
// $array1 = array(2, 4, 7, 4, 8, 4);


// $array1 = array_values(array_unique($array1));


// print_r($array1);

// functions qual 
// -----------------------=========== question 1

// function isPrime($number) {
//     if ($number <= 1) {
//         return false;
//     }
//     for ($i = 2; $i <= sqrt($number); $i++) {
//         if ($number % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }

// // Test case
// $number = 3;
// if (isPrime($number)) {
//     echo "$number is a prime number";
// } else {
//     echo "$number is not a prime number";
// }

// -----------------------=========== question 2


// function reverseString($str) {
//     return strrev($str);
// }


// $str = "remove";
// echo "Reverse of '$str' is '" . reverseString($str) . "'";
// -----------------------=========== question 3

// function isLowerCase($str) {
//     if (strtolower($str) === $str) {
//         return "Your String is Ok";
//     } else {
//         return "Your String is not Ok";
//     }
// }

// // Test case
// $str = "remove";
// echo isLowerCase($str);






// -----------------------=========== question 4

// function swapVariables(&$x, &$y) {
//     $temp = $x;
//     $x = $y;
//     $y = $temp;
// }

// // Test case
// $x = 12;
// $y = 10;
// swapVariables($x, $y);
// echo "After swap: x=$x y=$y";

// -----------------------=========== question 5
// function isArmstrong($number) {
//     $sum = 0;
//     $temp = $number;
//     while ($temp != 0) {
//         $remainder = $temp % 10;
//         $sum += $remainder ** 3;
//         $temp = (int)($temp / 10);
//     }
//     if ($sum == $number) {
//         return "$number is Armstrong Number";
//     } else {
//         return "$number is not Armstrong Number";
//     }
// }

// // Test case
// $number = 407;
// echo isArmstrong($number);


// -----------------------=========== question 6


// function isPalindrome($str) {
//     $str = preg_replace('/[^a-z0-9]/i', '', $str); // Remove non-alphanumeric characters
//     $str = strtolower($str); // Convert to lowercase
//     $reverseStr = strrev($str); // Reverse the string
//     if ($str == $reverseStr) {
//         return "Yes it is a palindrome";
//     } else {
//         return "No it is not a palindrome";
//     }
// }

// // Test case
// $str = "Eva, can I see bees in a cave?";
// echo isPalindrome($str);

// -----------------------=========== question 7

// function removeDuplicates($array) {
//     return array_values(array_unique($array));
// }

// // Test case
// $array = array(2, 4, 7, 4, 8, 4);
// echo "Array after removing duplicates: ";
// print_r(removeDuplicates($array));