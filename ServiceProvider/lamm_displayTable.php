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
print("Connection successful to: <br />

host = $host <br />
database = $database<br /><br >");

print("<hr />");

//Show Databases on the MySQL host specified
$query = "SHOW DATABASES";
$result = $mysqli->query($query);
if(!$result){
    die('There was an error running the query [' . $mysqli->error . ']');
}
print("query \"$query\" successful!<br /><br />");

while($row = $result->fetch_assoc()){
    print_r( $row ); 
	print("<br />");
	}
print("<hr />");


//Show tables in the database specified
$query = "SHOW TABLES FROM $database";
 
$result = $mysqli->query($query);

if(!$result){
    die('There was an error running the query [' . $mysqli->error . ']');
}
print("query \"$query\" successful!<br /><br />");

while($row = $result->fetch_assoc()){
    print_r( $row ); 
	print("<br />");
	}
print("<hr />");


	
$query = 'SELECT * FROM ' . $table; //Create a SQL statement string

if(!$result = $mysqli->query($query)){
    die('There was an error running the query [' . $mysqli->error . ']');
}

print("query \"$query\" successful!<br /><br />");
//Display all rows / contents of $result object returned by query using fetch_assoc() method
while($row = $result->fetch_assoc()){
    print( $row["id"] . " " . $row["first_name"] . " " . $row["last_name"] . " " . $row["bio"] . "<br />");
}

$mysqli->close();


?>