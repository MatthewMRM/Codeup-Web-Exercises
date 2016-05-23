
<?php
REQUIRE 'adlister_credentials.php';
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
    description TEXT(500),
    PRIMARY KEY (id)
)';
//run the above query
$dbc->exec($query);
?>