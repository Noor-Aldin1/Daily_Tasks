<?php
//  Array 
// ------------------Qesution 1 

// $colors = ["red", "green", "yellow"];


// echo <<<"here"
// <h1>The memory of that scene for me is like a frame of film forever frozen at that moment: the  $colors[2]
// carpet, the  $colors[1] lawn, the white house, the leaden sky. The new president and his first lady. -
// Richard M. Nixon $colors[0] </h1>
// here;

// ------------------Qesution 2
// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $x) {
//     echo "<ul>
//   <li>$x</li>

// </ul>  ";
// }

// ------------------Qesution 3



// $cities = array(
//     "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
//     "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
//     "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" =>
//     "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon",
//     "Spain" => "Madrid"
// );

// echo "<ul>
//   <li> The capital of <b> Luxembourg </b> is " . $cities["Luxembourg"] . " </li>
//   <li> The capital of<b> Italy </b> is " . $cities["Italy"] . " </li>
//   <li> The capital of<b> Slovakia is</b> " . $cities["Slovakia"] . " </li>
//   <li> The capital of<b> Ireland is</b> " . $cities["Ireland"] . " </li>

// </ul>";

// ------------------Qesution 4
// $color = array(4 => 'white', 6 => 'green', 11 => 'red');
// echo "<h1>" . reset($color) . "</h1>";


// ------------------Qesution 5

// $original = array(1, 2, 3, 4, 5);
// $inserted = array('$');

// array_splice($original, 3, 0, $inserted);

// ------------------Qesution 6
// $fruits = array(
//     "d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"
// );

// asort($fruits);
// foreach ($fruits as $x => $x_value) {
//     echo  $x . " = " . $x_value;
//     echo "<br>";
// }


// ------------------Qesution 7

// $temperature = array(
//     78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
//     65, 64, 68, 73, 75, 79, 73
// );

// $averageTemperature = array_sum($temperatures) / count($temperatures);


// sort($temperatures);


// $lowestTemperatures = array_slice($temperatures, 0, 5);


// $highestTemperatures = array_slice($temperatures, -5);

// ------------------Qesution 8

// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);


// $ruselt = array_merge($array1,$array2);
// print_r($ruselt);

// ------------------Qesution 9

// $colors = array("red","blue", "white","yellow");
// function uppercase( $colors ){
//     return "array {". $colors. " } ";

// }


// $x= implode(" , ",$colors);


// $y= strtoupper($x);

// print_r(uppercase($y));

// ------------------Qesution 10

// $colors = array("red","blue", "white","yellow");
// function uppercase( $colors ){
//     return " Array {". $colors. " } ";

// }


// $x= implode(" , ",$colors);


// $y= strtolower($x);

// print_r(uppercase($y));

// ------------------Qesution 11


// $x=200;
// while($x <= 250 )
// {

//     if($x  % 4==0){
//         echo $x . "  "  ; 
//     }
    

// $x++;
// }

// ------------------Qesution 12

// $words = array("abcd","abc","de","hjjeej","g","wer");


// $new_array = array_map('strlen', $words);

// echo "The shortest array length is ". min($new_array)."  The longest array length is ". max($new_array)." ";

// ------------------Qesution 13



// $y=0;
// while ($y <= 10){
//     $x = rand(10,20); 
// echo $x . " "  ;
// $y++;
// }


// ------------------Qesution 14
// $array1 = array(2, 0, 10, 12, 6);

// $lowestNonZero = null;

// foreach ($array1 as $value) {
//     if ($value !== 0 && ($lowestNonZero === null || $value < $lowestNonZero)) {
//         $lowestNonZero = $value;
//     }
// }

// if ($lowestNonZero !== null) {
//     echo "The lowest non-zero integer in the array is: " . $lowestNonZero;
// } else {
//     echo "No non-zero integer found in the array.";
// }

// ------------------Qesution 15

// function bubbleSortDescending(&$array) {
//     $n = count($array);
//     for ($i = 0; $i < $n; $i++) {
//         for ($j = 0; $j < $n - $i - 1; $j++) {
//             if ($array[$j] < $array[$j + 1]) {
//                 // Swap $array[$j] and $array[$j + 1]
//                 $temp = $array[$j];
//                 $array[$j] = $array[$j + 1];
//                 $array[$j + 1] = $temp;
//             }
//         }
//     }
// }

// $array1 = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);

// bubbleSortDescending($array1);

// print_r($array1);


// ------------------Qesution 16

// function floorWithPrecision($number, $precision, $separator) {

//     $shiftedNumber = $number * pow(10, $precision);
//     $flooredShiftedNumber = floor($shiftedNumber);
//     $flooredNumber = $flooredShiftedNumber / pow(10, $precision);
    
//     $formattedNumber = number_format($flooredNumber, $precision, $separator, '');

//     return $formattedNumber;
// }

// // Sample Data
// echo floorWithPrecision(1.155, 2, ".") . "<br>"; 
// echo floorWithPrecision(100.25781, 4, ".") . "<br>"; 
// echo floorWithPrecision(-2.9636, 3, ".") . "<br>"; 

// ------------------Qesution 17


// $list1 =array(4, 5, 6, 7);

// $list2 =array(4, 5, 7, 8) ;

// $x= array_merge($list1,$list2) ;


// $y=array_unique($x);

// print_r($y);

// ------------------Qesution 18
// $ary = array(4, 5, 6, 7, 4, 7, 8);

// print_r(array_unique($ary) );

// ------------------Qesution 19
// function isSubset($mainArray, $subsetArray) {
//     foreach ($subsetArray as $element) {
//         if (!in_array($element, $mainArray)) {
//             return false;
//         }
//     }
//     return true;
// }

// Sample Data
// $mainArray = array(1, 2, 3, 4, 5, 6);
// $subsetArray1 = array(2, 4, 6);
// $subsetArray2 = array(2, 7);

// $result1 = isSubset($mainArray, $subsetArray1);
// $result2 = isSubset($mainArray, $subsetArray2);

// echo "Is subsetArray1 a subset of mainArray? " . ($result1 ? "Yes" : "No") . "\n"; // Expected Output: Yes
// echo "Is subsetArray2 a subset of mainArray? " . ($result2 ? "Yes" : "No") . "\n"; // Expected Output: No