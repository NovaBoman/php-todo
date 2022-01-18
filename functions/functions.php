<?php

require 'connect.php';


// Create tasks




function createTask($title)
{
    global $db;

    if ($title == '') {
        return;
    } else {

        $createsql = "INSERT INTO tasks (title, completed) VALUES (:title, 0)";
        $createstmt = $db->prepare($createsql);
        $titleSanitized = htmlspecialchars($title);
        $createstmt->execute([':title' => $titleSanitized]);
    }
}
