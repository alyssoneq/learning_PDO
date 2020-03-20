<?php

include 'connect.php';

$stmt = $db->query('SELECT * FROM names');

//fetchall method returns the whole content of the database in one go
//fetchall = one query for whole table
//fetch = every row is a new query

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//fetch method returns the associative array and the numerical array at once 
//PDO::FETCH_ASSOC returns only the associative array from the database
//PDO::FETCH_NUM returns only the numerical array from the database 

foreach($result as $row) {
	
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$postcode = $row['postcode'];
	
	echo $firstname." ".$lastname." ".$postcode."<br>";
	
}