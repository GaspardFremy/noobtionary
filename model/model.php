<?php

// $db = dbConnect();

function dbConnect()
{
    $db = new PDO('mysql:host=localhost;dbname=tuthow;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $db;
}
