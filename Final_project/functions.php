<?php
// require MySQL Connection
require("database/DBController.php");

// require food class
require("database/Food.php");
// Create db object
$db = new DBController();

$food = new Food($db);


?>


