<?php

//Prepared statements prevents user query injection thus increase security

//named paramenters just use ":" instead of the ? 

include 'connect.php';

//To use wildcards put LIKE on the prepared statement
$stmt = $db->prepare('SELECT * FROM names WHERE firstname = :firstname');

$names = array('Andy', 'Brian','Godfrey');
//$id = 3;

//$stmt->bindValue(1,'3'); //number 1 represents binding for the the first ? in the prepare statement
//$stmt->bindValue(2,'Colin'); //number 2 indicates binding for the second ? in the prepare statement

//WHY USE bindParam INSTEAD OF bindValue
//with bindParam we can ask for a list of names or numbers
//just use an array as a parameter to the bindParam

foreach($names as $name){
	
	//works like bindValue, but it only works with variables assigned
	//third paramenter into the bind method is to explicit data type
	
	$stmt->bindParam(':firstname',$name , PDO::PARAM_STR); 
	//$stmt->bindParam(2,$id);
	$stmt->execute();


	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$postcode = $row['postcode'];
		
		echo $firstname." ".$lastname." ".$postcode."<br>";
		//echo var_dump($row);
	}
}