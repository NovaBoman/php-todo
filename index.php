<?php
require 'functions/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U04</title>
</head>

<body>

    <form action="create.php" method="POST">
        <input type="text" name="title" placeholder="Add task">
        <button type="submit" name="submit">Add</button>
    </form>


    <h1>Hello</h1>

    <?php getTasks() ?>

</body>

</html>