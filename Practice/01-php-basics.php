<?php

// basic user data
$first = "Justin";
$last = "Uaisele";
$fullName = "$first $last";

// array of items Justin should bring
$items = ["book", "pen", "eraser"];

// simple associative array for another person
$user = [
    "name" => "Lali",
    "role" => "Teacher",
];

// store age in one clearly named variable
$justinAge = 20;

/**
 * return a greeting message for a given name
 */
function greet(string $name): string
{
    return "Hello, " . $name;
}

// output one heading using the greeting function
// the first item in the array and the users name
echo "<h1>" . greet($fullName) . " you need a {$items[0]} and talk to {$user['name']}</h1>";

// output all items in one heading
echo "<h1>In total bring ";
foreach ($items as $item) {
    echo $item . " ";
}
echo "</h1>";

// use a conditional to decide justins status based on age
if ($justinAge >= 18) {
    $status = "Adult";
} else {
    $status = "Minor";
}

// output the final status message
echo "<h1>Justin is a $status</h1>";

?>