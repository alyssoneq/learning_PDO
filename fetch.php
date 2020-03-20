<?php

include 'connect.php';

$stmt = $db->query('SELECT * FROM names');

//fetch method returns the associative array and the numerical array at once 
//PDO::FETCH_ASSOC returns only the associative array from the database
//PDO::FETCH_NUM returns only the numerical array from the database 

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	
	echo $row['firstname']." ".$row['lastname']." ".$row['postcode'] ."<br>";
	//echo var_dump($row);
}