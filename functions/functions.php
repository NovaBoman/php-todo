<?php

require 'connect.php';


// Create tasks

function createTask($title)
{
    global $db;

    if ($title == '') {
        return;
    } else {

        $sql = "INSERT INTO tasks (title, created, completed) VALUES (?, curdate(), 0)";
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
        echo '<div class="' . $taskClass . '">
            <a class="checkbox" href="/completed.php?id=' . $task->id . '"></a>
            <p class="title">' . $task->title . '</p>
            <a class="delete" href="/delete.php?id=' . $task->id . '">Delete</a>
            <a class ="edit" href="/edit.php?id=' . $task->id . '">edit</a>
            <p class="date">' . $task->created . '</p>
            </div>';
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
    $sql = "UPDATE tasks SET title = ?, edited = curdate() WHERE id = ?";
    $stmt = $db->prepare($sql);
    $titleSanitized = htmlspecialchars($title);
    $stmt->execute([$titleSanitized, $id]);
}


// Delete single task

function deleteTask($id)
{
    global $db;
    $sql = "DELETE FROM tasks WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
}

// Delete all marked as completed

function deleteMarked()
{
    global $db;
    $db->query("DELETE FROM tasks WHERE completed = 1");
}


// Mark single task as completed

function toggleCompleted($id)
{
    global $db;
    $completed = getTaskById($id)->completed == 0 ? 1 : 0; // Checks status

    $sql = "UPDATE tasks SET completed = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$completed, $id]);
    return $completed;
}

// Mark all completed

function markAll()
{
    global $db;
    $db->query("UPDATE tasks SET completed = 1");
}
