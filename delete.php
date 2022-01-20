<?php

require 'functions/functions.php';
deleteTask($_GET['id']);
header("Location: /index.php");
die();
