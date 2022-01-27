<?php

// Connect to database 
try {
    $db = new PDO('mysql:host=mysql;dbname=u04', 'root', 'example');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection to database failed.';
}
