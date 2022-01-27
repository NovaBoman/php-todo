<?php

// Connect to database 
$db = new PDO('mysql:host=mysql;dbname=u04', 'root', 'example');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
