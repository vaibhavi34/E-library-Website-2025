<?php
// connecting td the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = " dbnew785";

// Create connection
$conn = mysqli_connect($servername, $username, $password, );

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{
    echo " edit profile  succesfull";
}

//Sql query to be executed

$sql ="INSERT INTO `edit profile`( `Name`,  `Email`, `Bio`)";


?>