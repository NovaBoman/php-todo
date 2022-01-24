<?php

require 'functions/functions.php';

if (isset($_GET['id'])) {
    toggleCompleted($_GET['id']);
} elseif ($_GET['completed'] == "all") {
    markAll();
}
header("Location: /index.php");
die();
