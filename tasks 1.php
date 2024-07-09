<?php


// PHP string and string function
// question 1

// $x = "Hello World!";
// echo strtoupper($x);
// echo "<br>";
// $x = "NOOR";
// echo "<br>";
// echo strtolower($x);
// echo "<br>";
// $x = "hello noor nice to meet you ";
// echo ucwords($x);

// -----------------------------------------------------
// question 2


// $date=date_create("085119");
// echo date_format($date,"H:i:s");

// -----------------------------------------------------
// question 3


// strpos --> function finds the position of the first occurrence of a string inside another string.


// $sentence = "I am a full stack developer at orange coding academy";
// $word = "Orange";

// //lowercase
// $sentenceLower = strtolower($sentence);
// $wordLower = strtolower($word);

// echo strpos($sentenceLower, $wordLower);
// echo "<br>";
// //strpos(string,find,start)
// if (strpos($sentenceLower, $wordLower) == true) {
//     echo "Word Found!";
// } else {
//     echo "Word Not Found!";
// }


// -----------------------------------------------------
// question 4


// // url to inspect
// $url = 'http://localhost/test/test.php';

// // parsed path
// $path = parse_url($url, PHP_URL_PATH);

// // extracted basename
// echo basename($path);

// -----------------------------------------------------
// question 5


// $mailid  = 'noor@gmail.com';    // Assigns an email address to the variable $mailid
// $user = strstr($mailid, '@', true); // Finds the first occurrence of '@' in $mailid and returns the substring before it
// echo $user ;                    // Outputs the substring before the '@' character in the email address

// -----------------------------------------------------
// question 6


// $mailid  = 'noor@gmail.com';
// $com = strstr($mailid, 'com');
// echo $com;

// -----------------------------------------------------
// question 7

// $pass = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
// // Shuffle the characters in the string and extract a substring of length $chars

// //  substr() function returns a part of a string.

// echo substr(str_shuffle($pass), 0, 10);
// -----------------------------------------------------
// question 8

// $words = "that new trainee  is so genius ";

// $words = "that new trainee  is so genius ";
// $pattern = '/that/i';
// echo preg_replace($pattern, 'the', $words);

// -----------------------------------------------------
// question 9
// $str1 = 'dragonball';
// $str2 = 'dragonbool';

// // Calculate the position of the first difference between the two strings
// $str_pos = strspn($str1 ^ $str2, "\0");

// // Output the position of the first difference along with the characters at that position
// // function outputs a formatted string.
// printf(
//     'First difference between two strings at position %u: "%s" vs "%s"',
//     $str_pos,
//     $str1[$str_pos],
//     $str2[$str_pos]
// );

// -----------------------------------------------------
// question 10


// // Define the input string
// $inputString = "Twinkle, twinkle, little star.";

// // Split the string into an array
// $array = array(
//     substr($inputString, 0, 9),   // "Twinkle, "
//     substr($inputString, 9, 9),   // " twinkle,"
//     substr($inputString, 18, 8),  // " little "
//     substr($inputString, 26)      // "star."
// );

// // Use var_dump to display the array
// var_dump($array);

// -----------------------------------------------------
// question 11

// $inputChar = 'a';
// if ($inputChar === 'z') {
//     echo 'a';
// } elseif ($inputChar === 'Z') {
//     echo 'A';
// } else {
//     echo chr(ord($inputChar) + 1);
// }
// echo "\n";

// $inputChar = 'z';
// if ($inputChar === 'z') {
//     echo 'a';
// } elseif ($inputChar === 'Z') {
//     echo 'A';
// } else {
//     echo chr(ord($inputChar) + 1);
// }
// echo "\n";


// -----------------------------------------------------
// question 12
// $originalString = 'The brown fox';
// $stringToInsert = ' quick';
// $position = 3; // After 'The'

// $newString = substr($originalString, 0, $position) . $stringToInsert . substr($originalString, $position);
// echo "Modified String: '$newString'\n";

// -----------------------------------------------------
// question 12

// function breaks a string into an array
// $sentence = 'The quick brown fox';
// $words = explode(' ', $sentence);
// $firstWord = $words[0];

// echo "First word: " .  $firstWord;

// -----------------------------------------------------
// question 13



// $number = '0000657022.24';
// $newNumber = str_replace('0', '', $number);

// echo "Modified Number: $newNumber";

// -----------------------------------------------------
// question 14



// $originalString = 'The quick brown fox jumps over the lazy dog';
// $stringToRemove = 'fox';

// $newString = str_replace($stringToRemove, '', $originalString);
// echo "Modified String: "  . $newString;


// -----------------------------------------------------
// question 15

// $originalString = 'The quick brown fox jumps over the lazy dog---';
// $stringToRemove = '---';

// $newString = str_replace($stringToRemove, '', $originalString);
// echo "Modified String: "  . $newString;

// -----------------------------------------------------
// question 16

// $originalString = '\"\1+2/3*2:2-3/4*3';

// // Use preg_replace to remove special characters
// // The regular expression [^a-zA-Z0-9\s] matches any character that is not a letter, digit, or whitespace
// $cleanedString = preg_replace('/[^a-zA-Z0-9\s]/', '', $originalString);

// echo "Original String: $originalString";
// echo "Cleaned String: $cleanedString";


// -----------------------------------------------------
// question 17

// $my_string = 'The quick brown fox jumps over the lazy dog';


// echo implode(' ', array_slice(explode(' ', $my_string), 0, 5));

// -----------------------------------------------------
// question 18
// $originalString = '2,543.12';
// $stringToRemove = ',';

// $newString = str_replace($stringToRemove, '', $originalString);
// echo "Modified String: "  . $newString;

// -----------------------------------------------------
// question 19
// for ($x = ord('a'); $x <= ord('z'); $x++)
// // Loop through ASCII values of lowercase letters from 'a' to 'z'.

//  echo chr($x);




// ------------------------------logical statements and operators-------------------------------
// -----------------------------------------------------
// question 1

// $year = 2013;

// if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
//     echo "This year is a leap year";
// } else {
//     echo "This year is not a leap year";
// }


// -----------------------------------------------------
// question 2
// $temperature = 27;

// if ($temperature < 20) {
//     echo "It is wintertime!";
// } else {
//     echo "It is summertime!";
// }


// -----------------------------------------------------
// question 3
// $firstInteger = 2;
// $secondInteger = 2;

// if ($firstInteger == $secondInteger) {
//     echo ($firstInteger + $secondInteger) * 3;
// } else {
//     echo $firstInteger + $secondInteger;
// }

// -----------------------------------------------------
// question 4

// $firstInteger = 10;
// $secondInteger = 10;

// if ($firstInteger + $secondInteger == 30) {
//     echo $firstInteger + $secondInteger;
// } else {
//     echo "false";
// }

// -----------------------------------------------------
// question 5
// $number = 20;

// if ($number > 0 && $number % 3 == 0) {
//     echo "true";
// } else {
//     echo "false";
// }


// -----------------------------------------------------
// question 6

// $x = 20;
// if ($x >= 20 && $x <= 50)
//     echo "<h1>true </h1>";
// else
//     echo " <h1>false </h1>";
// -----------------------------------------------------
// question 7

// $numbers = [1, 5, 9];


// $a = $numbers[0];
// $b = $numbers[1];
// $c = $numbers[2];


// $largest = $a;


// if ($b > $largest) {
//     $largest = $b;
// }


// if ($c > $largest) {
//     $largest = $c;
// }


// echo "The largest number is: " . $largest;
// -----------------------------------------------------
// question 8

// $units = 275;


// $bill = 0;

// if ($units <= 50) {
//     $bill = $units * 2.50;
// } elseif ($units <= 150) {
//     $bill = (50 * 2.50) + (($units - 50) * 5.00);
// } elseif ($units <= 250) {
//     $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
// } else {
//     $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
// }


// echo "The electricity bill for $units units is: " . $bill . " JOD";

// -----------------------------------------------------
// question 9

// $Arithmetic_mark = "-";
// $x = 3;
// $y = 4;

// switch ($Arithmetic_mark) {
//     case "+":
//         echo $x + $y;
//         break;
//     case "-":
//         echo $x - $y;
//         break;
//     case "/":
//         echo $x / $y;
//         break;
//     case "*":
//         echo $x * $y;
//         break;
//     default:
//         echo "There is no arithmetic sign in this form";
// }

// -----------------------------------------------------
// question 10

// $x = 15;
// if ($x <= 18)
//     echo "You can vote";
// else
//     echo "is no eligible to vote";


// -----------------------------------------------------
// question 11

// $x = 0;
// if ($x < 0)
//     echo "Negative";
// else if ($x == 0)
//     echo "Zero";
// else
//     echo "Positive";

// -----------------------------------------------------
// question 12

// $Grades = array(60, 86, 95, 63, 55, 74, 79, 62, 50);
// $avarage = array_sum($Grades) / count($Grades);


// if ($avarage <= 60) :
//     echo "F";
// elseif ($avarage < 70) :
//     echo "D";
// elseif ($avarage < 80) :
//     echo "C";
// elseif ($avarage < 90) :
//     echo "B";
// elseif ($avarage < 90) :
//     echo "A";
// endif;
