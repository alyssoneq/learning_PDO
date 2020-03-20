<?php

include 'connect.php';

//query method to select data from the $db database

foreach($db->query('SELECT * FROM names') as $row ){
	
	echo $row['firstname']." ".$row['lastname']." ".$row['postcode'] ."<br>";
	
}