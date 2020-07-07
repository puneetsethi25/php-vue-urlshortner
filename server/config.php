<?php
// Hostname for your URL shortener. Set this where you will host the applicaiton
$hostname = 'http://localhost/urlshortner/server';

// PDO connection to the database
$connection = new PDO('mysql:dbname=urlshortner;host=localhost', 'root', 'password');

$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

$salt = 'XPzSI6v5DqLuBtVWQARy2mfwkC14F8HUTOG0aJiYpNrl9Zxgbd3Khsno7jMeEc';

$padding = 3;

function c($exp, $dump = false)
{
    echo '<pre>';
    ($dump ? var_dump($exp) : print_r($exp));
    echo '</pre>';
}
