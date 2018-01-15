<?php
//Joseph Thayer 
//Database configuration file
//Change accordingly for your system


$host       = "localhost";
$username   = "root";
$password   = "jpmt1995";
$dbname     = "todo"; 
$dsn        = "mysql:host=$host;dbname=$dbname"; 
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //set default PDO throw exceptions 
             ); 
			 ?>