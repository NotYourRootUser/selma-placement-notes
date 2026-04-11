# PHP Basics 1

## Goal
Get comfortable enough with PHP syntax and structure so Symfony code does not feel completely unfamiliar.

## What PHP is
PHP is a server-side language used to build web applications. It runs on the server and sends output back to the browser.

## Core syntax

### Variables
```php
$name = "Justin";
$age = 20;
$isStudent = true;
```

### Strings
```php
$first = "Justin";
$last = "Uaisele";
$fullName = $first . " " . $last;
$fullName = "$first $last";
```

### Arrays
```php
$items = ["pen", "book", "laptop"];
```

### Associative arrays
```php
$user = [
    "name" => "Justin",
    "role" => "student"
];
```

### Conditionals
```php
if ($age >= 18) {
    echo "Adult";
} else {
    echo "Minor";
}
```

### Loops
```php
foreach ($items as $item) {
    echo $item;
}
```

### Functions
```php
function greet($name) {
    return "Hello, " . $name;
}
```

## Important PHP syntax habits
- Variables start with `$`
- Statements usually end with `;`
- String concatenation uses `.`
- Associative arrays use `=>`
- `foreach` is very common

## PHP vs JavaScript

### Similarities
- Variables
- Loops
- Conditionals
- Functions
- Arrays / structured data

### Differences
- PHP variables start with `$`
- PHP uses `.` for joining strings
- Associative arrays are very common
- PHP is mainly server-side in this context
- Syntax looks older and more explicit than JavaScript

## Tiny examples

### Example 1: loop through students
```php
$students = ["Alice", "Bob", "Charlie"];

foreach ($students as $student) {
    echo $student . "\n";
}
```

### Example 2: simple function
```php
function square($num) {
    return $num * $num;
}
```

### Example 3: associative array
```php
$product = [
    "title" => "Notebook",
    "price" => 10
];
```

## Things that still feel unfamiliar
- PHP variable syntax
- Associative array syntax
- String concatenation with `.`
- Server-side mindset compared to JavaScript

## Recall questions
1. How do variables start in PHP?
2. What operator joins strings?
3. What does `=>` mean in an associative array?
4. What does `foreach` do?
5. How is PHP different from JavaScript?