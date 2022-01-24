<?php
require 'functions/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <title>U04</title>
</head>

<body>

    <h1>Let's do</h1>

    <form action="create.php" method="POST">
        <input type="text" name="title" placeholder="Add task">
        <button type="submit" name="submit">Add</button>
    </form>

    <?php showTasks(); ?>

    <footer>
        <a href="/completed.php?completed=all">Mark all</a>
        <a href="/delete.php?clearmarked=true">Clear marked</a>
    </footer>
</body>

</html>