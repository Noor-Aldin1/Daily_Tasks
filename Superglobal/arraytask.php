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

$temperature = array(
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
    65, 64, 68, 73, 75, 79, 73
);

$averageTemperature = array_sum($temperatures) / count($temperatures);


sort($temperatures);


$lowestTemperatures = array_slice($temperatures, 0, 5);


$highestTemperatures = array_slice($temperatures, -5);
