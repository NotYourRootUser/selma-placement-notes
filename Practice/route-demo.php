<?php

$url =$_GET['page'] ?? 'home';

if ($url === 'home') {
    echo "Home Page";
}   elseif ($url === 'about') {
    echo "About Page";
}   else {
    echo "404 Not Found";
}

