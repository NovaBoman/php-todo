<?php
require 'functions/functions.php';

if (isset($_GET['id'])) {
    deleteTask($_GET['id']);
} elseif ($_GET['clearmarked'] == "true") {
    deleteMarked();
}
header("Location: /index.php");
die();
