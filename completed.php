<?php
require 'functions/functions.php';

if (isset($_GET['id'])) {
    toggleCompleted($_GET['id']);
} elseif (isset($_GET['completed'])) {
    markAll($_GET['completed']);
}

header("Location: /index.php");
die();
