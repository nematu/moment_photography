<?php

// Turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// connect to database using DPO
const DB_DSN = "mysql:dbname=nayaznet_nayaz";
const DB_USERNAME = "nayaznet_nayaz";
const DB_PASSWORD = "Kabuljan@123";
try {
    //instantiate a database query
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    echo "connected to the database";
} catch (PDOException $e) {
    echo $e->getMessage();
}
