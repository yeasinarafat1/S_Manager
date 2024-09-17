<?php


// Database connection settings
define("HOSTNAME", "localhost"); // hostname or ip address of the database server
define("USERNAME", "root"); // username to use when connecting to the database
define("PASSWORD", ""); // password to use when connecting to the database
define("DATABASE", "Student info"); // name of the database to connect to

// Connect to the database
$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
