<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "students";
$table = "lamm_class";

$mysqli = new mysqli($host, $user, $pass, $database);
if ($mysqli->connect_error) {
    die("<h2>Connect ERror to $host: " . $mysqli->connect_error . "</h2>");
}
print ("Connection successful to database $database in $host. <br/> Displaying records from table $table.");
print ("<hr />");

$query = "SELECT * FROM " . $table;

if (!$result = $mysqli->query($query)) {
    die('There was an error running the query [' . $mysqli->error . ']');
}

while ($row = $result->fetch_assoc()){
    print( $row["id"] . " " . $row["first_name"] . " " . $row["last_name"] . " " . $row["bio"] . "<br />");
}

$mysqli->close();

?>