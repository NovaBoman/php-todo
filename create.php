<?php

require 'functions/functions.php';

createTask($_POST['title']);
header("Location: /index.php");
die();
