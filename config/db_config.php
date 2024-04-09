<?php

$dbhost = 'localhost';
$dbuser = 'net24fgraaff_ToetsUser';
$dbpass = 'ToetsUser';
$dbname = 'net24fgraaff_Toets_P7';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>