<?php

// PHP doesn't show unnecessary warnings
error_reporting(E_ERROR | E_PARSE);

$con = mysqli_connect('localhost','root','','cr11_attilatakacs_travelmatic');

//this one will make the connection
function query($query){

	global $con;

	return mysqli_query($con,$query);
}

//this one escapes special characters in a string for use in an SQL statement.
function escape($string){

	global $con;

	return mysqli_real_escape_string($con,$string);
}

//confirm that all the queries are good!
function confirm($result){

	global $con;

	if(!$result) {
		die("QUERY FAILED". mysqli_error($con));
	}
}

//fetch data
function fetch_array($result){

	global $con;

	return mysqli_fetch_array($result);

}

//this one count the rows in the database
function row_count($result){

	return mysqli_num_rows($result);
}


/* small test for function
	<?php
	$sql = "Select * from users";
	$result = query($sql);
	confirm($result);
	$row = fetch_array($result);
	echo $row['username'];?>
*/
 ?>
