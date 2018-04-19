<?php
// this file will receive and prepare the data
$greeting = "Hello, " . htmlspecialchars($_GET['name']);
// then the following file will render the data
// this is a highlevel concept of separatation of concerns
require 'index.view.php';