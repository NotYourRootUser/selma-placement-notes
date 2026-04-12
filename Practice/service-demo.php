<?php

class GreetingService
{
    public function getGreeting(string $name): string
    {
        return "Hello, " . ucfirst($name) . "!";
    }
}

function helloController(string $name, GreetingService $service): string
{
    return $service->getGreeting($name);
}

$name = $_GET['name'] ?? 'guest';
$service = new GreetingService();

echo helloController($name, $service);