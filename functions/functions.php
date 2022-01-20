<?php

require 'connect.php';


// Create tasks

function createTask($title)
{
    global $db;

    if ($title == '') {
        return;
    } else {

        $sql = "INSERT INTO tasks (title, completed) VALUES (?, 0)";
        $stmt = $db->prepare($sql);
        $titleSanitized = htmlspecialchars($title);
        $stmt->execute([$titleSanitized]);
    }
}

// Get all tasks

function showTasks()
{
    global $db;

    $stmt = $db->query("SELECT * FROM tasks");
    $tasks = $stmt->fetchAll();
    foreach ($tasks as $task) {
        $taskClass = $task->completed == 1 ? "task completed" : "task incomplete";
        echo '<div class="' . $taskClass . '">' . $task->title . '<a href="/delete.php?id=' . $task->id . '">Delete</a>
        <a href="/edit.php?id=' . $task->id . '">Edit</a>
        <a href="/completed.php?id=' . $task->id . '&completed=' . $task->completed . '">Done</a></div>';
    }
}

// Get single task by ID

function getTaskById($id)
{
    global $db;
    $sql = "SELECT * FROM tasks WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    $task = $stmt->fetch();
    return $task;
}

// Get task title

function getTitle($id)
{
    return getTaskById($id)->title;
}

// Edit task

function editTask($id, $title)
{
    global $db;
    $sql = "UPDATE tasks SET title = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $titleSanitized = htmlspecialchars($title);
    $stmt->execute([$titleSanitized, $id]);
}
