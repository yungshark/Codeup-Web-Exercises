<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks');
require_once 'db_connect.php';
$createTableQuery = 'CREATE TABLE IF NOT EXISTS national_parks(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(150) NOT NULL,
    location VARCHAR(165) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres DOUBLE NOT NULL,
    description TEXT NOT NULL,
    park_url VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)';
$dbc->exec('DROP TABLE IF EXISTS national_parks');
$dbc->exec($createTableQuery);