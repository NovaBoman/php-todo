<?php

require 'functions/functions.php';
toggleCompleted($_GET['id']);
header("Location: /index.php");
die();
