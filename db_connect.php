<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=employees', 'vagrant', 'vagrant');
//$dbc = new PDO('mysql:host='.DB_HOSt.';dbname='.DB_NAME, DB_USER. DB_PASS);

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);