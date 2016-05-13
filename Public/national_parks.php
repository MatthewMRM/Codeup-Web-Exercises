<?php
$errors = [];
$parkTextField = 'matthew';

// var_dump($check);
// On each page load, it should retrieve all records from the database and display them.
// Modify your query to load only four parks at a time.
// Use a parameter in $_GET to determine which page the user is on and load only the appropriate parks for that page.
// Modify your page to add links to go to the next or previous page(s).
// Add some logic to determine whether or not to show the next and/or previous page links.
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'vagrant');
define('DB_PASS', 'vagrant');
require_once '../db_connect.php';
// input is how we get our page numbers
require_once '../Input.php';
// this will give me OFFSET
