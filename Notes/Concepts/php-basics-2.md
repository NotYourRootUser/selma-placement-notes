# PHP Basics 2

## Goal
Get comfortable with classes, objects, methods, constructors, and basic request/response flow in PHP.

## Core concepts

### Class
A class is a blueprint for creating objects.

A class helps group related data and behavior together in one place.

```php
class StudentNote
{
}
```

### Object
An object is one instance created from a class.

An object holds its own property values based on the class blueprint.

```php
$note = new StudentNote();
```

### Property
A property is a variable inside an object. Properties store data.

```php
class StudentNote
{
    public $studentName;
    public $noteText;
    public $status;
}
```

### Method
A method is a function inside a class. Methods perform actions or return information based on the object's data.

```php
class StudentNote
{
    public function isOpen()
    {
        return $this->status === "open";
    }
}
```

### Public
`public` means the property or method can be accessed from outside the object.

## Constructor and $this

```php
class StudentNote
{
    public $studentName;
    public $noteText;
    public $status;

    public function __construct($studentName, $noteText, $status)
    {
        $this->studentName = $studentName;
        $this->noteText = $noteText;
        $this->status = $status;
    }
}
```

- `__construct()` runs when the object is created
- `$this` means the current object
- `$this->studentName` means the `studentName` property on this specific object

## Property vs method

```php
echo $note->studentName; // property
echo $note->isOpen();    // method
```

- properties store data
- methods do something with that data

## Request and response

### Request
A request is the information the browser sends to the server, which PHP can read.

Example:

```php
$status = $_GET["status"] ?? "all";
```

### Response
A response is the output PHP sends back to the browser, such as HTML or text.

Example:

```php
echo "Selected status: " . $status;
```

If the URL is:

```text
notes-by-status.php?status=open
```

PHP reads `open` from the request and can respond with filtered output.

## Small example

```php
class StudentNote
{
    public $studentName;
    public $noteText;
    public $status;

    public function __construct($studentName, $noteText, $status)
    {
        $this->studentName = $studentName;
        $this->noteText = $noteText;
        $this->status = $status;
    }

    public function isOpen()
    {
        return $this->status === "open";
    }
}

$note = new StudentNote("Mia", "Needs help with loops", "open");

if ($note->isOpen()) {
    echo $note->studentName;
}
```

## Project link
In the next project:
- each note can become an object
- methods can check status or return summaries
- `$_GET` can filter notes by status or student

## Recall questions
1. What is a class?
2. What is an object?
3. What is a property?
4. What is a method?
5. What is the difference between a property and a method?
6. What does `$this` mean?
7. What does `$_GET` do?