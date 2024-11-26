<?php

$dsn = 'mysql:host=localhost;dbname=demo;user=root;password=admin';

try {
    $db = new PDO($dsn);
}
catch (PDOexception $e){
    echo $e;
}