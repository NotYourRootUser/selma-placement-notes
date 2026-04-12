<?php

$name = "Justin";
$age = 22;
$items = ["pen", "book", "laptop"];

function greet($name) {
    return "Hello, " . $name;
}

echo "<h1>" . greet($name) . "</h1>";

if ($age >= 18) {
    echo "<p>Adult</p>";
} else {
    echo "<p>Minor</p>";
}

echo "<ul>";
foreach ($items as $item) {
    echo "<li>" . $item . "</li>";
}
echo "</ul>";