<?php
require 'functions/functions.php';


if (isset($_POST['submit'])) {
    editTask($_POST['id'], $_POST['title']);
    header("Location: /index.php");
    die();
} ?>

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
    <form class="edit-form" action="/edit.php" method="POST">
        <input type="hidden" value="<?= $_GET['id'] ?>" name="id">
        <input type="text" value="<?= getTitle($_GET['id']); ?>" name="title">
        <button type="submit" name="submit">Update</button>
    </form>
</body>

</html>