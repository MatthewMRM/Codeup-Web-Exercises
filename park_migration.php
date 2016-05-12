<?php
//Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=park_db.', 'parks_user', 'Panther6612$');

//Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

REQUIRE 'db_connect.php';