
<?php
REQUIRE 'adlister_credentials.php';
REQUIRE 'db_connect.php';
$query = 'DROP TABLE IF EXISTS users';
//run the above query
$dbc->exec($query);
$query = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(20) NOT NULL,
    PRIMARY KEY (id)
)';
//run the above query
$dbc->exec($query);
?>