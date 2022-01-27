<?php
require 'functions/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>U04</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Simply do it</h1>
        </header>

        <form action="create.php" method="POST">
            <input type="text" name="title" placeholder="Add task">
            <button type="submit" name="submit">Add</button>
        </form>

        <div class="task-wrapper">
            <?php showTasks(); ?>
        </div>
        <footer>
            <a class="footer-links" href="/completed.php?completed=all">Mark all</a>
            <a class="footer-links" href="/delete.php?clearmarked=true">Clear marked</a>
        </footer>
    </div>
</body>

</html>