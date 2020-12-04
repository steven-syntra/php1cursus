<?php

$sql = " INSERT INTO taak SET " ;
$sql .= " taa_omschr = '" .  $_POST["taa_omschr"] . "' , ";
$sql .= " taa_datum = '" .  $_POST["taa_datum"] . "' , ";
$sql .= " taa_uren = '" .  $_POST["taa_uren"] . "' ";

print $sql;

$servername = "localhost";
$username = "root";
$password = "steven123";
$dbname = "steden";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//define and execute query
$result = $conn->query($sql);

var_dump($result);

header("Location: taak.html");

$conn->close();