<?php

require 'connect.php';


// Create tasks

$createsql = "INSERT INTO tasks (title, completed) VALUES (:title, 0)";
$createstmt = $db->prepare($createsql);


function createTask($title)
{
    global $createstmt;
    if ($title == '') {
        return;
    } else {
        $titleSanitized = htmlspecialchars($title);
        $createstmt->bindParam(':title', $titleSanitized);
        $createstmt->execute();
    }
}
