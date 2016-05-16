<?php
//Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=parks_db.', 'vagrant', 'vagrant');

//Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

REQUIRE 'db_connect.php';

$query = 'DROP TABLE IF EXISTS national_parks';
//run the above query
$dbc->exec($query);
$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(100),
    date_established DATE,
    area_in_acres DOUBLE,
    PRIMARY KEY (id)
)';
//run the above query
$dbc->exec($query);
?>