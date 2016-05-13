<?php
// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=parks_db', 'parks_user', 'Panther6612$');
// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//add query to delete all records from db
$dbc->exec('TRUNCATE national_parks');
//parks info as array
$parks = [
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => 47389.67],
    ['name' => 'American Samoa', 'location' => 'American Samoa', 'date_established' => '1988-10-31', 'area_in_acres' => 9000.00],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1929-04-12', 'area_in_acres' => 76518.98],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => 242755.94],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => 801163.21],
    ['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-06-28', 'area_in_acres' => 172924.07],
    ['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_established' => '1999-10-21', 'area_in_acres' => 32950.03],
    ['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => '1928-02-25', 'area_in_acres' => 35835.08],
    ['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1964-09-12', 'area_in_acres' => 337597.83],
    ['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => '1971-12-18', 'area_in_acres' => 241904.26]
];
//insert info for 10 parks as array of data
foreach ($parks as $park) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres)
                VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', {$park['area_in_acres']} )";
    $dbc->exec($query);
}
?>
Status API Training Shop Blog About
