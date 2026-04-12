<?php

function homeController()
{
    return "This is the home controller response";
}

function aboutController()
{
    return "This is the about controller response";
}

$page = $_GET['page'] ?? 'home';

if ($page === 'home') {
    echo homeController();
} elseif ($page === 'about') {
    echo aboutController();
} else {
    echo "404 Not Found";
}