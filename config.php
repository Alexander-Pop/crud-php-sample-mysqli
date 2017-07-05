<?php
/* work with localhost */
$databaseHost = 'localhost';
$databaseName = 'php_learn_and_dev2015';
$databaseUsername = 'root';
$databasePassword = 'root';

$mysqli = mysqli_connect(
	$databaseHost, 
	$databaseUsername, 
	$databasePassword, 
	$databaseName
	); 
 
?>
